<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\Admin\MainPagesController;


// ******* Main Pages Routes *********** //

Route::prefix('/')->as('Main_Pages.')->group(function () {

    Route::get('Get_Started',[MainPagesController::class,'GetStarted'])->name('Get_Started');
    Route::get('About_Hakkem',[MainPagesController::class,'AboutUs'])->name('About_Hakkem');
    Route::get('Home',[MainPagesController::class,'Home'])->name('Home');
    
});

// ******************* Requests Routes ***********************//

Route::prefix('Requests')->as('Requests.')->group(function () {

    Route::get('Promotion_Request',[RequestsController::class,'Promotion_Request'])->name('Promotion_Request');

    // Route::get('Publish_Request',[RequestsController::class,''])->name('Publish_Request');

    Route::prefix('ReviewRequest')->as('ReviewRequest.')->group(function () {

        Route::get('Review_Options',[RequestsController::class,'Review_Options'])->name('Review_Options');
        Route::get('Ind_Reviewer_Options',[RequestsController::class,'Ind_Reviewer_Options'])->name('Ind_Reviewer_Options');
        Route::get('AI_Review',[RequestsController::class,'AI_Review'])->name('AI_Review');
        Route::get('Through_Offers_Review',[RequestsController::class,'Through_Offers_Review'])->name('Through_Offers_Review');
        Route::get('Through_Ind_Reviewer',[RequestsController::class,'Through_Ind_Reviewer'])->name('Through_Ind_Reviewer');
    });

});




