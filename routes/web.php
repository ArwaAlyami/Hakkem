<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\Admin\MainPagesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\SystemadmenController;

    Route::prefix('Auth')->as('admin.')->group(function () {
    Route::get('SignIn',[AuthController::class,'MainSignInForm'])->name('SignIn-get');
    Route::post('SignIn-post',[AuthController::class,'authenticate'])->name(name: 'SignIn');
    Route::post('register',[AuthController::class,'register'])->name(name: 'register');
    Route::get('SignUp',[AuthController::class,'SignUp'])->name('SignUp');
    Route::get('me',[AuthController::class,'me'])->middleware(middleware: 'Auth');
});



Route::get('/admin/Systemadmen', [SystemadmenController::class, 'viewDashboard']);
Route::get('/admin/FacultyMember', [SystemadmenController::class, 'viewUsers']);
Route::put('/admin/FacultyMember/{user}/role', [SystemadmenController::class, 'updateUserRole'])->name('update.FacultyMember.role');
Route::post('/research/add', [SystemadmenController::class, 'addResearch']);
Route::get('/research/{research}', [SystemadmenController::class, 'viewResearch']);
Route::delete('/research/{research}', [SystemadmenController::class, 'deleteResearch']);
Route::post('/update-role', [SystemadmenController::class, 'updateRole'])->name('update.role');
Route::post('/register', [SystemadmenController::class, 'register'])->name('register.submit');
;

// ******* Main Pages Routes *********** //

Route::prefix('/')->middleware('auth')->as('Main_Pages.')->group(function () {

    Route::get('/home',[HomeController::class,'index'])->name('Home');
    Route::get('/',[MainPagesController::class,'GetStarted'])->name('Get_Started');
    Route::get('About_Hakkem',[MainPagesController::class,'AboutUs'])->name('About_Hakkem');
    Route::get('Home',[MainPagesController::class,'Home'])->name('Home');

});

// ************ SignIn SignUp Pages ******************* //

Route::prefix('Auth')->as('Auth.')->group(function () {

    Route::get('MainSignInForm',[AuthController::class,  'MainSignInForm'])->name('MainSignInForm');
    Route::get('MainSignUpForm',[AuthController::class,  'MainSignUpForm'])->name('MainSignUpForm');
    Route::get('IndividualSignUp',[AuthController::class,  'IndividualSignUp'])->name('IndividualSignUp');
    Route::get('JournalSignUpForm',[AuthController::class,  'JournalSignUpForm'])->name('JournalSignUpForm');
    Route::get('UniversitySignUpForm',[AuthController::class,  'UniversitySignUpForm'])->name('UniversitySignUpForm');

});

// ******************* Requests Routes ***********************//

Route::prefix('Requests')->as('Requests.')->group(function () {

    Route::get('Promotion_Request',[RequestsController::class,'Promotion_Request'])->name('Promotion_Request');


    Route::prefix('ReviewRequest')->as('ReviewRequest.')->group(function () {

        Route::get('Review_Options',[RequestsController::class,'Review_Options'])->name('Review_Options');
        Route::get('Ind_Reviewer_Options',[RequestsController::class,'Ind_Reviewer_Options'])->name('Ind_Reviewer_Options');
        Route::get('AI_Review',[RequestsController::class,'AI_Review'])->name('AI_Review');
        Route::get('Through_Offers_Review',[RequestsController::class,'Through_Offers_Review'])->name('Through_Offers_Review');
        Route::get('Through_Ind_Reviewer',[RequestsController::class,'Through_Ind_Reviewer'])->name('Through_Ind_Reviewer');
    });

});

// Route::prefix('PromotionAdmin')->as('PromotionAdmin.')->group(function () {
//     Route::get('',[MainPagesController::class,  ''])->name('');
// });




// Route::get('/trying', function () {
//     return view('Main_Pages.Main.Home');
// });
