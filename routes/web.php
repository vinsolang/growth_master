<?php

use App\Http\Controllers\Admin\AboutCardController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ApplyToBeController;
use App\Http\Controllers\backend\AppraochContentController;
use App\Http\Controllers\backend\BAccountingController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\BcomeSpeakerController;
use App\Http\Controllers\backend\CACLicenseeController;
use App\Http\Controllers\backend\CACSponsorController;
use App\Http\Controllers\backend\CEOClimbController;
use App\Http\Controllers\backend\ChairContactController;
use App\Http\Controllers\backend\EventsController;
use App\Http\Controllers\backend\EventTypeController;
use App\Http\Controllers\backend\FAQsController;
use App\Http\Controllers\backend\HelpSectionController;
use App\Http\Controllers\backend\HomeCardController;
use App\Http\Controllers\backend\HomeComtentController;
use App\Http\Controllers\backend\HomeTextController;
use App\Http\Controllers\backend\HowItWorksController;
use App\Http\Controllers\backend\LeadershipController;
use App\Http\Controllers\backend\LeadGroup;
use App\Http\Controllers\backend\LeadGroupController;
use App\Http\Controllers\backend\MentorsQualificationsController;
use App\Http\Controllers\backend\NavbarMenuController;
use App\Http\Controllers\backend\OurApproachController;
use App\Http\Controllers\backend\OurProgramController;
use App\Http\Controllers\backend\OurTeamController;
use App\Http\Controllers\backend\PeerGroupContentController;
use App\Http\Controllers\backend\ProgramContentController;
use App\Http\Controllers\backend\ProgramGuaranteedController;
use App\Http\Controllers\backend\ProramJobTextController;
use App\Http\Controllers\backend\ReferralProgramController;
use App\Http\Controllers\backend\ReviewPageContentController;
use App\Http\Controllers\backend\WhyJoinGrowthMasterController;
use App\Http\Controllers\frontend\AboutGrowthControll;
use App\Http\Controllers\frontend\BecomeAMemberController;
use App\Http\Controllers\frontend\ClientController;
use App\Http\Controllers\MembershipController;
use App\Models\Banner;
use App\Models\EventType;
use App\Models\FAQs;
use App\Models\HomeContent;
use App\Models\HomeText;
use App\Models\NavbarMenu;
use App\Models\WhyJoinGrowthMaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/* ============================================================================================
                                                @@@ Frontend
============================================================================================== */
Route::get('/', function () {
    $showFAQs = FAQs::all();
    $getBanner = Banner::all();
    $getTeam = DB::table('team')->get();
    $getHomeContent = HomeContent::all();
    $getMenu = NavbarMenu::all();
    $getEventsex = EventType::take(3)->get();
    return view('frontend.home', compact(
        'showFAQs',
        'getBanner',
        'getTeam',
        'getHomeContent',
        'getMenu',
        'getEventsex'
        ));
})->name('home');



// Member ship
Route::get('membership/why-choose-cac', function () {
    $getContent = WhyJoinGrowthMaster::all();
     $getMenu = NavbarMenu::all();
    $getBanner = Banner::all();
    return view('frontend.membership', compact('getBanner','getContent', 'getMenu'));
})->name('membership');
Route::get('membership/cac-platform', [ClientController::class, 'ourApproach'])->name('approach');
Route::get('cac-programs/certification-programs', [ClientController::class, 'memberShipPrograms'])->name('program');

Route::get('cac-programs/job-guaranteed-programs', [ClientController::class, 'memberShipGuaranteed'])->name('program.job');
Route::get('cac-programs/job-guaranteed-programs/details{id}', [ClientController::class, 'ProgramDetails'])->name('program.details');

// Route::get('membership/{slug}', [ClientController::class, 'Membership']);

Route::get('membership/cac-members-reviews', [ClientController::class, 'growthReview'])->name('review');
Route::get('membership/member-application', [ClientController::class, 'membershipApplication'])->name('application');
Route::get('membership/exclusive-cfo-group', [ClientController::class, 'ExclusivePeerGroups'])->name('exclusive.peer.groups');
Route::get('per-to-per', function(){
    $getBanner = Banner::all();
    return view('frontend.sitemap.per-to-per-matoring', compact('getBanner'));
})->name('per.to.per');

Route::get('chief-executive-coaching-program', function(){
     $getBanner = Banner::all();
    return view('frontend.sitemap.program.chief-executive-coaching-program', compact('getBanner'));
})->name('chief.executive.coaching.program');
Route::get('small-business-program', function(){
     $getBanner = Banner::all();
      $showFAQs = FAQs::all();
    return view('frontend.sitemap.program.small-business-program', compact('getBanner','showFAQs'));
})->name('small.business.program');

Route::get('trusted-advisor-program', function(){
     $getBanner = Banner::all();
      $showFAQs = FAQs::all();
    return view('frontend.sitemap.program.trusted-advisor-program', compact('getBanner','showFAQs'));
})->name('trusted.advisor.program');

Route::get('key-executive-program', function(){
     $getBanner = Banner::all();
      $showFAQs = FAQs::all();
    return view('frontend.sitemap.program.key-executive-program', compact('getBanner','showFAQs'));
})->name('key.executive.program');

Route::get('advancing-leader-program', function(){
     $getBanner = Banner::all();
      $showFAQs = FAQs::all();
    return view('frontend.sitemap.program.advancing-leader-program', compact('getBanner','showFAQs'));
})->name('advancing.leader.program');

Route::get('emerging-leader-program', function(){
     $getBanner = Banner::all();
      $showFAQs = FAQs::all();
    return view('frontend.sitemap.program.emerging-leader-program', compact('getBanner','showFAQs'));
})->name('emerging.leader.program');

Route::get('growth-master-inside-program', function(){
    $getBanner = Banner::all();
    $showFAQs = FAQs::all();
    return view('frontend.sitemap.program.growth-master-inside-program', compact('getBanner','showFAQs'));
})->name('growth.master.inside.program');


// Route::post('/chair-contact', [ChairContactController::class, 'store'])
//     ->name('chair.contact.store');

// Store
Route::post('/chair-contact', [ChairContactController::class, 'store'])
    ->name('chair.contact.store');

// View all (index)
Route::get('/chair-contact', [ChairContactController::class, 'index'])
    ->name('chair.contact.index');

// View single (detail)
Route::get('/chair-contact/{id}', [ChairContactController::class, 'show'])
    ->name('chair.contact.show');

// Delete
Route::delete('/chair-contact/{id}', [ChairContactController::class, 'destroy'])
    ->name('chair.contact.destroy');
    

// Event
Route::get('events', [ClientController::class, 'events'])->name('events');
Route::get('events/details/{slug}', [ClientController::class, 'eventsDetails'])->name('events.details');




Route::get('ceo-climb-events', [ClientController::class, 'ceoClimbEvents'])->name('ceo.climb.events');
Route::get('research-center/webinar', [ClientController::class, 'researchCenterWebinar'])->name('research.center.webinar');
// Growth Master Chair
Route::get('mentors/lead-a-group',[ClientController::class, 'growthMasterChair'])->name('chair.growth');
Route::get('mentors/qualifications', [ClientController::class, 'CEOCoachingQual'])->name('ceo.coa.qual');
Route::get('cac/chair-profile', [ClientController::class, 'ChairProfile'])->name('chair.profile');
Route::get('mentors/apply-to-be-a-mentor', [ClientController::class, 'ChairApplication'])->name('chair.application');

// aboute
Route::get('about-cac/what-is-cac', [AboutGrowthControll::class, 'aboutGrowth'])->name('about');
Route::get('about-cac', [AboutGrowthControll::class, 'whatIsGrowthMaster'])->name('what.is.growth');
Route::get('about-cac/mstem-laws-of-career-success-factors', [AboutGrowthControll::class, 'leaderShip'])->name('Laws.of.eadership');
Route::get('about-cac/the-leader-stairs', [AboutGrowthControll::class, 'CeoClimp'])->name('ceo.climp');
Route::get('about-cac/4bs-of-accountants', [AboutGrowthControll::class, 'Baccounting'])->name('accounting');

// sitemap
Route::get('sitemap', [ClientController::class, 'sitemap'])->name('sitemap');

// Submite Become a member
Route::resource('memberships', MembershipController::class)
    ->only(['store', 'index', 'destroy']);
Route::get('thankyou-membership-application', [BecomeAMemberController::class, 'PageSubmitSucess'])->name('success');
Route::get('form/input-info', [BecomeAMemberController::class, 'FormInputInfo'])->name('form.input');

// Apply for CAC
Route::get('apply-for-cac/become-a-speaker', [ClientController::class,'BeComeASpeaker'])->name('speaker');
Route::get('apply-for-cac/cac-licensee', [ClientController::class,'BecomeLicensee'])->name('licensee');
Route::get('apply-for-cac/cac-sponsor', [ClientController::class,'BecomeSponsor'])->name('sponsor');
Route::get('apply-for-cac/referral-program', [ClientController::class,'BecomeReferralProgram'])->name('referral-program');


/* ==============================================================================================
                                                @@@ Backend
=============================================================================================== */

//=========================================== Profile View and Update=============================
Route::get('/admin/profile', [AuthController::class,'profile'])->name('profile');
Route::post('/admin/submit_profile',[AuthController::class,'submitUpdateUser'])->name('submit.update.profile');
// ==== Route Loing and Register ====
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/submit/register', [AuthController::class,'submitRegister'])->name('submit.register');
Route::post('/submit/login', [AuthController::class,'submitLogin'])->name('submit.login');
// ==== Route Logout ====
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/submit/logout',[AuthController::class,'submitLogout'])->name('logout.submit');



Route::middleware(['auth'])->group(function(){
    Route::get('admin/',[AdminController::class, 'admin'])->name('dashboard');
    // ============================================ @@ Frequently Asked Question  ===================================================
    Route::get('/add/faqs',[FAQsController::class,'addFaqs'])->name('add_faqs');
    Route::get('/view/faqs', [FAQsController::class,'viewFaqs'])->name('view_faqs');
    Route::post('/submit/faqs',[FAQsController::class,'submitAddFaqs'])->name('submit.add.faqs');
    // Update our faqs
    Route::get('/update/faqs/{id}', [FAQsController::class,'updateFaqs'])->name('update.faqs');
    Route::post('/submit/edit/faqs', [FAQsController::class,'submitToUpdateFaqs'])->name('submit.update.faqs');
    // Remove our faqs
    Route::post('/remove/faqs', [FAQsController::class,'submitToRemoveFaqs'])->name('remove.faqs');

    // Help Sectioin
    Route::resource('helpsction', HelpSectionController::class);
     // How It Works
    Route::resource('work', HowItWorksController::class);
    // ============================================ @@ Our Team ===================================================
    Route::get('/add/ourteam',[OurTeamController::class,'addOurTeam'])->name('add_team');
    Route::get('/view/ourteam', [OurTeamController::class,'viewOurTeam'])->name('view_team');
    Route::post('/submit/addteam',[OurTeamController::class,'submitAddOurTeam'])->name('submit.add.team');
    // Update our team
    Route::get('/update/team/{id}', [OurTeamController::class,'updateTeam'])->name('update.team');
    Route::post('/submit/updateteam', [OurTeamController::class,'submitToUpdateTeam'])->name('submit.update.team');
    // Remove our team
    Route::post('/remove/our_team', [OurTeamController::class,'submitToRemoveTeam'])->name('remove.our.team');

    // Our Approach
    Route::resource('approach', OurApproachController::class);
    // Our Program
    Route::resource('program', OurProgramController::class);
    // Events
    Route::resource('event', EventsController::class);
    Route::resource('banner', BannerController::class);

    // Why Join Growth Master
    Route::get('whyjoin', [WhyJoinGrowthMasterController::class, 'whyjoin'])->name('whyjoin');
    Route::post('whyjoin/add', [WhyJoinGrowthMasterController::class, 'Submitwhyjoin'])->name('submit.whyjoin');

    // Home
    Route::get('homecontent', [HomeComtentController::class, 'homeContent'])->name('homecontent');
    Route::post('homecontent/add', [HomeComtentController::class, 'SubmitHomeContent'])->name('submit.homecontent');

    // Approach Content
    Route::get('approachcontent', [AppraochContentController::class, 'approachcontent'])->name('approachcontent');
    Route::post('approachcontent/add', [AppraochContentController::class, 'SubmitApproachContent'])->name('submit.approachcontent');

    // Program Content
    Route::get('programcontent', [ProgramContentController::class, 'programcontent'])->name('programcontent');
    Route::post('programcontent/add', [ProgramContentController::class, 'SubmitProgramContent'])->name('submit.programcontent');

    // Review Content
    Route::get('reviewcontent', [ReviewPageContentController::class, 'reviewcontent'])->name('reviewcontent');
    Route::post('reviewcontent/add', [ReviewPageContentController::class, 'SubmitReviewcontent'])->name('submit.reviewcontent');

    // Peer Group Content
    Route::get('peergroupcontent', [PeerGroupContentController::class, 'peergroupcontent'])->name('peergroupcontent');
    Route::post('peergroupcontent/add', [PeerGroupContentController::class, 'SubmitPeerGroupContent'])->name('submit.peergroupcontent');

    // About Us
    Route::get('about/page', [AboutUsController::class, 'about'])->name('about.admin');
    Route::post('about/add/page', [AboutUsController::class, 'SubmitAbout'])->name('submit.about');

    // Leadership  leaderships
    Route::get('leaderships/page', [LeadershipController::class, 'leaderships'])->name('leaderships.admin');
    Route::post('leaderships/add/page', [LeadershipController::class, 'SubmitLeaderships'])->name('submit.leaderships');

     // 4B Accounting
    Route::get('about/account/page', [BAccountingController::class, 'BAccouting'])->name('accounting.admin');
    Route::post('about/account/add/', [BAccountingController::class, 'SubmitBAccount'])->name('submit.accounting.admin');

    // c_e_o_climbs
    Route::get('c_e_o_climbs/page', [CEOClimbController::class, 'c_e_o_climbs'])->name('c_e_o_climbs');
    Route::post('c_e_o_climbs/add/page', [CEOClimbController::class, 'Submitc_e_o_climbs'])->name('submit.c_e_o_climbs');

    // Menu
    Route::get('menu/page', [NavbarMenuController::class, 'menu'])->name('menu');
    Route::post('menu/add/page', [NavbarMenuController::class, 'SubmitMenu'])->name('submit.menu');

    // leadgroup
    Route::get('leadgroup/page', [LeadGroupController::class, 'leadgroup'])->name('leadgroup');
    Route::post('leadgroup/add/page', [LeadGroupController::class, 'SubmitLeadgroup'])->name('submit.leadgroup');

    // mentorsqualifications
    Route::get('mentorsqualifications/page', [MentorsQualificationsController::class, 'mentorsqualifications'])->name('mentorsqualifications');
    Route::post('mentorsqualifications/add/page', [MentorsQualificationsController::class, 'Submitmentorsqualifications'])->name('submit.mentorsqualifications');

    // Apply to be
    Route::get('apply/page', [ApplyToBeController::class, 'apply'])->name('apply');
    Route::post('apply/add/page', [ApplyToBeController::class, 'Submitapply'])->name('submit.apply');

    // program job
    Route::get('programtext/page', [ProramJobTextController::class, 'programtext'])->name('programtext');
    Route::post('programtext/add/page', [ProramJobTextController::class, 'SubmitProgramtext'])->name('submit.programtext');
    
    
    // Program block content
    Route::resource('job-guaranteed-program', ProgramGuaranteedController::class);

    Route::get('/admin/events', [EventTypeController::class, 'index'])->name('events.index');
    Route::post('/admin/events/update', [EventTypeController::class, 'update'])->name('events.update');

    Route::get('/admin/become', [BcomeSpeakerController::class, 'index'])->name('become.index');
    Route::post('/admin/become/update', [BcomeSpeakerController::class, 'update'])->name('become.update');

    Route::get('/admin/licensee', [CACLicenseeController::class, 'index'])->name('licensee.index');
    Route::post('/admin/licensee/update', [CACLicenseeController::class, 'update'])->name('licensee.update');

    Route::get('/admin/sponsors', [CACSponsorController::class, 'index'])->name('sponsors.index');
    Route::post('/admin/sponsors/update', [CACSponsorController::class, 'update'])->name('sponsors.update');
//  referralprogram
    Route::get('/admin/referralprogram', [ReferralProgramController::class, 'index'])->name('referralprogram.index');
    Route::post('/admin/referralprogram/update', [ReferralProgramController::class, 'update'])->name('referralprogram.update');


});