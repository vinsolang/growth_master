<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FAQs;
use Illuminate\Http\Request;

class FAQsController extends Controller
{
    // Show add form
    public function addFaqs()
    {
        return view('backend.faqs.add-faqs');
    }

    // Submit new FAQ
    public function submitAddFaqs(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        FAQs::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('view_faqs')->with('message', 'FAQ added successfully!');
    }

    // View all FAQs
    public function viewFaqs()
    {
        $faqs = FAQs::get();
        return view('backend.faqs.view-faqs', compact('faqs'));
    }

    // Edit form
    public function updateFaqs($id)
    {
        $faq = FAQs::findOrFail($id);
        return view('backend.faqs.update-faqs', compact('faq'));
    }

    // Submit edit
    public function submitToUpdateFaqs(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = FAQs::findOrFail($request->id);

        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return redirect()->route('view_faqs')->with('message', 'FAQ updated successfully!');
    }

    // Remove FAQ
    public function submitToRemoveFaqs(Request $request)
    {
        $faq = FAQs::findOrFail($request->remove_id);
        $faq->delete();

        return redirect()->route('view_faqs')->with('message', 'FAQ removed successfully!');
    }
}
