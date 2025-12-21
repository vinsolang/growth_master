<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\FAQsController;
use App\Http\Controllers\backend\HelpSectionController;
use App\Http\Controllers\backend\HowItWorksController;
use App\Http\Controllers\frontend\AboutGrowthControll;
use App\Http\Controllers\frontend\BecomeAMemberController;
use App\Http\Controllers\frontend\ClientController;
use App\Http\Controllers\MembershipController;
use Illuminate\Support\Facades\Route;

/* ============================================================================================
                                                @@@ Frontend
============================================================================================== */
Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('membership', function () {
    return view('frontend.membership');
})->name('membership');
Route::get('membership/our-approach', [ClientController::class, 'ourApproach'])->name('approach');
Route::get('membership/programs', [ClientController::class, 'memberShipPrograms'])->name('program');
Route::get('membership/growth-reviews', [ClientController::class, 'growthReview'])->name('review');
Route::get('membership/member-application', [ClientController::class, 'membershipApplication'])->name('application');
Route::get('events', [ClientController::class, 'events'])->name('events');
Route::get('ceo-climb-events', [ClientController::class, 'ceoClimbEvents'])->name('ceo.climb.events');
Route::get('research-center/webinar', [ClientController::class, 'researchCenterWebinar'])->name('research.center.webinar');

// aboute
Route::get('about-growth', [AboutGrowthControll::class, 'aboutGrowth'])->name('about');
Route::get('about-growth/what-is-growth-master', [AboutGrowthControll::class, 'whatIsGrowthMaster'])->name('what.is.growth');
Route::get('about-growth/leadership-laws/', [AboutGrowthControll::class, 'leaderShip'])->name('Laws.of.eadership');


// Submite Become a member
Route::resource('memberships', MembershipController::class)
    ->only(['store', 'index', 'destroy']);
Route::get('thankyou-membership-application', [BecomeAMemberController::class, 'PageSubmitSucess'])->name('sucess');



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
});