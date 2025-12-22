<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OurTeamController extends Controller
{
     /*==========================================================
                            @@ Our Team
    ==========================================================*/
    public function addOurTeam(){
        return view("backend.member.add-team");
    }
    public function viewOurTeam(){
        $row = DB::table("team")->get();
        return view("backend.member.view-team", ["row"=> $row]);
    }
    public function submitAddOurTeam(Request $request){
        // Validation
        $request->validate([
            'name'        => 'required|string|max:255',
            'position'    => 'required|string',
            'bio'    => 'required|string',
            'highlight'    => 'required|string',
            'profile' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        ]);

        $name = $request->input("name");
        $position = $request->input("position");
        $bio = $request->input("bio");
        $highlight = $request->input("highlight");
        $profile = $request->file("profile");

        $path = './assets/team';
        $image = time().'-'.$profile->getClientOriginalName();
        $profile->move($path, $image);

        $result = DB::table('team')->insert([
            'name'=> $name,
            'position'=> $position,
            'profile'=> $image,
            'bio' => $bio,
            'highlight' => $highlight
        ]);

        if($result){
            return redirect()->route('view_team')->with('success','created sucess');
        }
    }
    // update team
    public function updateTeam($id){
        $row = DB::table('team')->where('id', $id)->get();
        return view('backend.member.update-team', ['row'=> $row]);
    }
    public function submitToUpdateTeam(Request $request){
        
        // $request->validate([
        //     'update_name'        => 'required|string|max:255',
        //     'update_position'    => 'required|string|max:255',
        //     'update_description' => 'required|string',
        //     'old_profile' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        //     'update_profile' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
        // ]);


        $update_id = $request->input('update_id');
        $update_name = $request->input('update_name');
        $update_position = $request->input('update_position');
        $update_bio = $request->input('update_bio');
        $update_highlight = $request->input('update_highlight');
        $update_profile = $request->file('update_profile');
        $old_profile = $request->input('old_profile');

        $path = './assets/team';
        if( $update_profile ){
            $image = time().'-'. $update_profile->getClientOriginalName();
            $update_profile->move($path, $image);
        }elseif($old_profile){
            $image = $old_profile;
        }

        $result = DB::table('team')->where('id', $update_id)->update([
            'name'=> $update_name,
            'position'=> $update_position,
            'bio' => $update_bio,
            'highlight' => $update_highlight,
            'profile'=> $image
        ]);
        if($result){
            return redirect()->route('view_team')->with('success','updated sucess');
        }
    }
    public function submitToRemoveTeam(Request $request){
         $remove_id = $request->input('remove_id');

        $result = DB::table('team')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view_team')->with('success','delated success');
        }
    }
}
