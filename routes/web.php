<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\Admin\MainPagesController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\FM_Researcher\MyProfileController;
use App\Http\Controllers\Admin\FM_Researcher\MyResearchesController;
use App\Http\Controllers\Admin\FM_Researcher\MyRequestsController;


// ******* Main Pages Routes *********** //

Route::prefix('/')->as('Main_Pages.')->group(function () {

    Route::get('/',[MainPagesController::class,'GetStarted'])->name('Get_Started');
    Route::get('About_Hakkem',[MainPagesController::class,'AboutUs'])->name('About_Hakkem');
    Route::get('Home',action: [MainPagesController::class,'Home'])->name('Home');
    
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

    Route::prefix('Promotion_Request')->as('Promotion_Request.')->group(function () {
        Route::get('First_Step',action: [RequestsController::class,'Promotion_Request'])->name('Promotion_Request');
        Route::get('First_Step',action: [RequestsController::class,'Promotion_Request'])->name('Promotion_Request');

        Route::post('First_Step',[RequestsController::class,'create'])->name('Promotion_Request');
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
    Route::prefix(prefix: 'My_Profile')->as(value: 'My_Profile.')->group(function () {
        Route::get('Profile',[MyProfileController::class,'index'])->name('Profile');
        Route::post('Profile-edit',[MyProfileController::class,'edit'])->name('Profile-edit');
    });

    // *********** Manage Users Routers ********** //
    // Route::prefix(prefix: 'Manage_Users')->as(value: 'Manage_Users.')->group(function () {

    //     Route::get('/',[MyResearchesController::class,'index'])->name('Manage');

    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');
    //     Route::post('Add_Research',[MyResearchesController::class,'store'])->name('Add_Research');

    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');
    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');

    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');
    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');

    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');
    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');

    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');
    //     Route::get('Create_User',[MyResearchesController::class,'create'])->name('Create_User');

    // });

    // // *********** My Requests Routers ********** //
    // Route::prefix(prefix: 'My_Requests')->as('My_Requests.')->group(function () {
    //     Route::get('Requests',[MyRequestsController::class,'index'])->name('Requests');
    
    //     // ***********  Request Details Routers ********** //
    //     Route::get('Request_Details',[MyRequestsController::class,'show'])->name('Request_Details');
    // });
    
    // // *********** Change Password Routers ********** //
    // Route::get('Change_Pass',[MyProfileController::class,'index'])->name('Change_Pass');
    // Route::post('Change_Pass-post',[MyProfileController::class,'create'])->name('Change_Pass-post');



    // // *********** SignOut Routers ********** //
    // Route::get('SignOut',[MyProfileController::class,'index'])->name('SignOut');
    // Route::post('SignOut-post',[MyProfileController::class,'create'])->name('SignOut-post');
});



// ************************************ FM_Researcher Router ******************************************* //
Route::prefix(prefix: 'Account')->as('Account.')->group(function () {

    // *********** Profile Routers ********** //
    Route::prefix(prefix: 'My_Profile')->as(value: 'My_Profile.')->group(function () {
        Route::get('Profile',[MyProfileController::class,'index'])->name('Profile');
        Route::post('Profile-edit',[MyProfileController::class,'edit'])->name('Profile-edit');
    });

    // *********** My Researches Routers ********** //


    // *********** My Requests Routers ********** //
    Route::prefix(prefix: 'My_Requests')->as('My_Requests.')->group(function () {
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


Route::prefix(prefix: 'Researches')->as(value: 'Researches.')->group(function () {
    Route::get('/',[MyResearchesController::class,'index'])->name('index');
    Route::get('/{id}',[MyResearchesController::class,'show'])->name('show');
    Route::get('create',[MyResearchesController::class,'create'])->name('create');
    Route::get('/',[MyResearchesController::class,'store'])->name('store');
    Route::delete('/{id}',[MyResearchesController::class,'delete'])->name('delete');

});
