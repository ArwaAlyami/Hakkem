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

// ******************* Requests Routes ***********************//

Route::prefix('Requests')->as('Requests.')->group(function () {

    Route::prefix('Promotion_Request')->as('Promotion_Request.')->group(function () {
        Route::get('promotion-create',action: [RequestsController::class,'promotionCreate'])->name('create');
        Route::post('promotion-store',action: [RequestsController::class,'promotionStore'])->name('store');
    });

    Route::prefix('ReviewRequest')->as('ReviewRequest.')->group(function () {
        Route::get('Review_Options',[RequestsController::class,'Review_Options'])->name('Review_Options');

        Route::get('Ind_Reviewer_Options',[RequestsController::class,'Ind_Reviewer_Options'])->name('Ind_Reviewer_Options');

        Route::get('AI_Review',[RequestsController::class,'AI_Review'])->name('AI_Review');

        Route::get('Through_Offers_Review',[RequestsController::class,'Through_Offers_Review'])->name('Through_Offers_Review');

        Route::get('Through_Ind_Reviewer',[RequestsController::class,'Through_Ind_Reviewer'])->name('Through_Ind_Reviewer');
    });

});

// ************************************ IT Admin Router ******************************************* //
Route::prefix(prefix: 'Account')->as('Account.')->group(function () {

    // *********** Profile Routers ********** //
    Route::prefix('My_Profile')->as(value: 'My_Profile.')->group(function () {
        Route::get('Profile',[ITAdminController::class,'index'])->name('Profile');
        Route::post('Profile-edit',[ITAdminController::class,'edit'])->name('Profile-edit');
    });

    // *********** My Researches Routers ********** //
    Route::prefix('manage-users')->as('manage-users.')->group(function(){
        Route::get('index', [ITAdminController::class,'index'])->name('index');
        Route::get('create', [ITAdminController::class,'create'])->name('create');
        Route::post('store', [ITAdminController::class,'store'])->name('store');
        Route::delete('/{id}', [ITAdminController::class,'delete'])->name('delete');
    });

});



// ************************************ FM_Researcher Router ******************************************* //
Route::prefix('Account')->as('Account.')->group(function () {

    // *********** Profile Routers ********** //
    Route::prefix('My_Profile')->as(value: 'My_Profile.')->group(function () {
        Route::get('Profile',[MyProfileController::class,'index'])->name('Profile');
        Route::post('Profile-edit',[MyProfileController::class,'edit'])->name('Profile-edit');
    });

    // *********** My Researches Routers ********** //
    Route::prefix('my-researches')->as('my-researches.')->group(function(){
        Route::get('index', [MyResearchesController2::class,'index'])->name('index');
        Route::get('show/{id}', [MyResearchesController2::class,'show'])->name('show');
        Route::get('create', [MyResearchesController2::class,'create'])->name('create');
        Route::post('store', [MyResearchesController2::class,'store'])->name('store');
        Route::delete('/{id}', [MyResearchesController2::class,'delete'])->name('delete');
    });

    // *********** My Requests Routers ********** //
    Route::prefix('My_Requests')->as('My_Requests.')->group(function () {
        Route::get('Requests',[MyRequestsController::class,'index'])->name('Requests');

    // ***********  Request Details Routers ********** //
        Route::get('Request_Details',[MyRequestsController::class,'show'])->name('Request_Details');
    });

    // *********** Change Password Routers ********** //
    Route::get('Change_Pass',[MyProfileController::class,'index'])->name('Change_Pass');
    Route::post('Change_Pass-post',[MyProfileController::class,'create'])->name('Change_Pass-post');


    // *********** SignOut Routers ********** //
    Route::get('SignOut',[MyProfileController::class,'index'])->name('SignOut');
    Route::post('SignOut-post',[MyProfileController::class,'create'])->name('SignOut-post');
});
