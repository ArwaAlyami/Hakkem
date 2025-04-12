<?php
use App\Http\Controllers\Admin\FM_Reviewer_Researcher\RevResController;
use App\Http\Controllers\Admin\PromotionAdmin\PromotionAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\RequestsController;
use App\Http\Controllers\Admin\MainPagesController;
use App\Http\Controllers\Admin\FM_Researcher\MyProfileController;
use App\Http\Controllers\Admin\FM_Researcher\MyResearchesController2;
use App\Http\Controllers\Admin\IT_Admin\ITAdminController;
use App\Http\Controllers\Admin\FM_Researcher\MyRequestsController;
use App\Http\Controllers\Admin\RoleController;

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


    Route::get('/',[MainPagesController::class,'GetStarted'])->name('Get_Started');
    Route::get('About_Hakkem',[MainPagesController::class,'AboutUs'])->name('About_Hakkem');
    Route::get('User_Type',[MainPagesController::class,  'UserType'])->name('User_Type');


    Route::prefix('/')->as('roles.')->group(function () {  
    
        Route::get('Roles',[RoleController::class,'index'])->name('index');
        Route::get('Role-Permission',action: [RoleController::class,'create'])->name('create');
        Route::post('Assign-Permission',action: [RoleController::class,'store'])->name('store');
        Route::get('show/{id}',action: [RoleController::class,'show'])->name('show');

    });




// ************ SignIn SignUp Pages ******************* //

Route::prefix('/')->middleware('auth')->as('Main_Pages.')->group(function () {

    Route::get('/home',[HomeController::class,'index'])->name('Home');
    Route::get('/',[MainPagesController::class,'GetStarted'])->name('Get_Started');
    Route::get('About_Hakkem',[MainPagesController::class,'AboutUs'])->name('About_Hakkem');
    Route::get('Home',[MainPagesController::class,'Home'])->name('Home');

});





// ******************* Requests Routes ***********************//

Route::prefix('Requests')->as('Requests.')->group(function () {

    Route::prefix('PromotionRequest')->as('PromotionRequest.')->group(function () {
        Route::get('MakePromotionRequest', action: [RequestsController::class, 'MakePromotionRequest'])->name('index');
        Route::post('promotionStore', action: [RequestsController::class, 'promotionStore'])->name('store');
    });


    Route::prefix('ReviewRequest')->as('ReviewRequest.')->group(function () {

        Route::get('Review_Options',[RequestsController::class,'Review_Options'])->name('ReviewOptions');

        Route::get('Ind_Reviewer_Options',[RequestsController::class,'Ind_Reviewer_Options'])->name('IndReviewerOptions');

        Route::get('AI_Review',[RequestsController::class,'AI_Review'])->name('AIReview');

        Route::get('Through_Offers_Review',[RequestsController::class,'Through_Offers_Review'])->name('ThroughOffersReview');

        Route::get('Through_Ind_Reviewer',[RequestsController::class,'Through_Ind_Reviewer'])->name('ThroughIndReviewer');
    });


    Route::prefix('PublishRequest')->as('PublishRequest.')->group(function () {
        Route::get('MakePublishRequest', action: [RequestsController::class, 'MakePublishRequest'])->name('index');
        Route::post('publishStore', action: [RequestsController::class, 'publishStore'])->name('store');
    });
});






// ************************************ IT Admin Router ******************************************* //
Route::prefix('ITAdminAccount')->as('ITAdminAccount.')->group(function () {

    // *********** Profile Routers ********** //

    Route::prefix('My_Profile')->as('My_Profile.')->group(function () {
        Route::get('Profile',[ITAdminController::class,'index'])->name('Profile');
        Route::post('Profile-edit',[ITAdminController::class,'edit'])->name('Profile-edit');
    });

    // *********** Manage Users Routers ********** //
    Route::prefix('manage-users')->as('manage-users.')->group(function(){
        Route::get('index', [ITAdminController::class,'ManageUsers'])->name('index');
        Route::get('create', [ITAdminController::class,'create'])->name('create');
        Route::post('store', [ITAdminController::class,'store'])->name('store');
        Route::get('edit', [ITAdminController::class,'edit'])->name('edit');
        Route::delete('/{id}', [ITAdminController::class,'delete'])->name('delete');
    });

    // *********** SignOut Routers ********** //
    Route::get('SignOut',[ITAdminController::class,'SignOut'])->name('SignOut');

});






// ************************************ Promotion Admin Router ******************************************* //


Route::prefix('PromotionAccount')->as('PromotionAccount.')->group(function () {

    // ** Profile Routers ** //
    Route::get('Profile', [PromotionAdminController::class, 'Profile'])->name('Profile');
    Route::post('ProfileEdit', [PromotionAdminController::class, 'ProfileEdit'])->name('ProfileEdit');

    // ** Requests Routers ** //
    Route::get('PromotionRequests', [PromotionAdminController::class, 'PromotionRequests'])->name('PromotionRequests');
    Route::get('AcceptOrReject', [PromotionAdminController::class, 'AcceptOrReject'])->name('AcceptOrReject');
    Route::get('AcceptedRequest', [PromotionAdminController::class, 'AcceptedRequest'])->name('AcceptedRequest');


    // ** Reviewers List Routers ** //
    Route::get('ReviewersLists', [PromotionAdminController::class, 'ReviewersLists'])->name('ReviewersLists');
    Route::get('ReviewersListContent', [PromotionAdminController::class, 'ReviewersListContent'])->name('ReviewersListContent');

});






// ************************************ FM_Researcher Router ******************************************* //
Route::prefix('ResearcherAccount')->as('researcher-account.')->group(function () {

    // ** Profile Routers ** //
    Route::prefix('My_Profile')->as('my-profile.')->group(function () {
        Route::get('Profile', [MyProfileController::class, 'index'])->name('index');
        Route::post('Profile-edit', [MyProfileController::class, 'edit'])->name('Profile-edit');
    });

    // ** My Researches Routers **//
    Route::prefix('my-researches')->as('my-researches.')->group(function () {
        Route::get('index', [MyResearchesController2::class, 'index'])->name('index');
        Route::get('show/{id}', [MyResearchesController2::class, 'show'])->name('show');
        Route::get('create', [MyResearchesController2::class, 'create'])->name('create');
        Route::post('store', [MyResearchesController2::class, 'store'])->name('store');
        Route::delete('/{id}', [MyResearchesController2::class, 'delete'])->name('delete');
    });

    // ** My Requests Routers ** //
    Route::prefix('My_Requests')->as('My_Requests.')->group(function () {

        Route::get('Requests',[MyRequestsController::class,'index'])->name('Requests');

    // ***********  Request Details Routers ********** //
        Route::get('Request_Details',[MyRequestsController::class,'show'])->name('Request_Details');
    });

    // *********** Change Password Routers ********** //
    Route::get('Change_Pass',[MyProfileController::class,'index'])->name('Change_Pass');
    Route::post('Change_Pass-post',[MyProfileController::class,'create'])->name('Change_Pass-post');

    // **  Request Details Routers **//
        Route::get('Request_Details', [MyRequestsController::class, 'show'])->name('Request_Details');
    });

    // *********** SignOut Routers ********** //
    Route::get('SignOut',[MyProfileController::class,'SignOut'])->name('SignOut');





// ************************************ FM_RevRes Router ******************************************* //


Route::prefix('RevResAccount')->as('RevResAccount.')->group(function () {


    // ** Profile Routers ** //
    Route::get('Profile', [RevResController::class, 'Profile'])->name('Profile');
    Route::post('ProfileEdit', [RevResController::class, 'ProfileEdit'])->name('ProfileEdit');


    // ** MY Requests Routers ** //
    Route::get('My_Requests', [RevResController::class, 'MyRequests'])->name('My_Requests');


    // ** MY Researches Routers ** //
    Route::get('My_Researches', [RevResController::class, 'MyResearches'])->name('My_Researches');
    Route::get('AddResearch', [RevResController::class, 'AddResearch'])->name('AddResearch');
    Route::post('AddResearchForm', [RevResController::class, 'AddResearchForm'])->name('AddResearchForm');


    // ** Received Requests Routers ** //
    Route::get('ReceivedRequests', [RevResController::class, 'ReceivedRequests'])->name('ReceivedRequests');
    Route::get('RequestDetailsIfAccept', [RevResController::class, 'RequestDetailsIfAccept'])->name('RequestDetailsIfAccept');
    Route::get('ReviewForm', [RevResController::class, 'ReviewForm'])->name('ReviewForm');
    Route::get('SubmitFeedback', [RevResController::class, 'SubmitFeedback'])->name('SubmitFeedback');

    Route::get('ReviewRequestDetails', [RevResController::class, 'ReviewRequestDetails'])->name('ReviewRequestDetails');
    Route::get('PromotionRequestDetails', [RevResController::class, 'PromotionRequestDetails'])->name('PromotionRequestDetails');


    // ** Reviewers profile Routers ** //
    Route::get('ReviewerProfile', [RevResController::class, 'ReviewerProfile'])->name('ReviewerProfile');

});


Route::get('RequestDetailsAcceptOrReject', [RevResController::class, 'RequestDetailsAcceptOrReject'])->name('RequestDetailsAcceptOrReject');
