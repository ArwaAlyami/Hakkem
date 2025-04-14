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
use App\Http\Controllers\Admin\FM_Researcher;
use App\Http\Controllers\ReviewerProfileController;
use App\Http\Controllers\Admin\ReviewerController;
use App\Http\Controllers\Admin\ReviewerRequestController;
use App\Http\Controllers\Admin\PromotionController;

// ******* Main Pages Routes *********** //

Route::get('/',[MainPagesController::class,'GetStarted'])->name('Get_Started');

Route::get('About_Hakkem',[MainPagesController::class,'AboutUs'])->name('About_Hakkem');
Route::get('User_Type',[MainPagesController::class, 'UserType'])->name('User_Type');



// ************ SignIn SignUp Pages ******************* //

Route::prefix('Auth')->as('admin.')->group(function () {
    Route::get('SignIn',[AuthController::class,'MainSignInForm'])->name('SignIn-get');
    Route::post('SignIn-post',[AuthController::class,'authenticate'])->name(name: 'SignIn');
    Route::post('register',[AuthController::class,'register'])->name(name: 'register');
    Route::get('SignUp',[AuthController::class,'MainSignUpForm'])->name('SignUp');
    Route::get('me',[AuthController::class,'me'])->middleware(middleware: 'Auth');
});

Route::prefix('/')->middleware('auth')->as('Main_Pages.')->group(function () {
    Route::get('Home',[HomeController::class,'index'])->name('Home');

});



// ******* System Admin Routes *********** //

Route::get('/admin/Systemadmen', [SystemadmenController::class, 'viewDashboard']);
Route::get('/admin/FacultyMember', [SystemadmenController::class, 'viewUsers']);
Route::put('/admin/FacultyMember/{user}/role', [SystemadmenController::class, 'updateUserRole'])->name('update.FacultyMember.role');
Route::post('/research/add', [SystemadmenController::class, 'addResearch']);
Route::get('/research/{research}', [SystemadmenController::class, 'viewResearch']);
Route::delete('/research/{research}', [SystemadmenController::class, 'deleteResearch']);
Route::post('/update-role', [SystemadmenController::class, 'updateRole'])->name('update.role');
Route::post('/register', [SystemadmenController::class, 'register'])->name('register.submit');



// ******************* Requests Routes ***********************//

Route::prefix('Requests')->as('Requests.')->group(function () {

    Route::prefix('PromotionRequest')->as('PromotionRequest.')->group(function () {
        Route::get('MakePromotionRequest', [RequestsController::class, 'MakePromotionRequest'])->name('index');
        Route::post('promotionStore', [RequestsController::class, 'promotionStore'])->name('store');
    });


    Route::prefix('ReviewRequest')->as('ReviewRequest.')->group(function () {

        Route::get('Review_Options',[RequestsController::class,'Review_Options'])->name('ReviewOptions');

        Route::get('Ind_Reviewer_Options',[RequestsController::class,'Ind_Reviewer_Options'])->name('IndReviewerOptions');

        Route::get('AI_Review',[RequestsController::class,'AI_Review'])->name('AIReview');

        Route::get('Through_Offers_Review',[RequestsController::class,'Through_Offers_Review'])->name('ThroughOffersReview');

        Route::get('Through_Ind_Reviewer',[RequestsController::class,'Through_Ind_Reviewer'])->name('ThroughIndReviewer');
    });


    Route::prefix('PublishRequest')->as('PublishRequest.')->group(function () {
        Route::get('MakePublishRequest', [RequestsController::class, 'MakePublishRequest'])->name('index');
        Route::post('publishStore', [RequestsController::class, 'publishStore'])->name('store');
    });


    });





// ************************************ Arwa ******************************************* //




// ************************************ Arwa ******************************************* //


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
        Route::delete('delete/{id}', [ITAdminController::class,'delete'])->name('delete');

        // *********** Users And Their Permissions **************//
        Route::get('UsersAndPermissions', [ITAdminController::class,'UsersAndPermissions'])->name('UsersAndPermissions');



        // ********** Edit members info Routers **************//
        Route::get('edit/{id}', [ITAdminController::class,'edit'])->name('edit');
        Route::put('/{id}', [ITAdminController::class,'update'])->name('update');
    });

    // *********** Sign Out Routers ********** //
    Route::get('SignOut',[ITAdminController::class,'SignOut'])->name('SignOut');

});

    // *********** Roles Routers ********** //

    Route::prefix('Roles')->as('roles.')->group(function () {

        Route::get('index',[RoleController::class,'index'])->name('index');
        Route::get('Role-Permission',[RoleController::class,'create'])->name('create');
        Route::post('Assign-Permission',[RoleController::class,'store'])->name('store');
        Route::get('show/{id}',[RoleController::class,'show'])->name('show');
        Route::delete('delete/{id}',[RoleController::class,'delete'])->name('delete');

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

    // **  Request Details Routers **//
    Route::get('Request_Details', [MyRequestsController::class, 'show'])->name('Request_Details');


    // *********** SignOut Routers ********** //
        Route::get('SignOut',[MyProfileController::class,'SignOut'])->name('SignOut');
    });










    //*********************************************** Waad ****************************************/


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



// ************************************ FM_RevRes Router ******************************************* //



Route::middleware(['auth', 'role:reviewer'])->group(function () {
    Route::get('my-requests/{type?}', [\App\Http\Controllers\Reviewer\RequestController::class, 'index'])->name('my-requests');
});


//Route::middleware(['auth', 'role:reviewer'])->group(function () {
    Route::get('/my-researches', [\App\Http\Controllers\Researcher\ResearchController::class, 'index'])->name('researcher-account.my-researches');
    Route::get('/my-researches/show/{id}', [\App\Http\Controllers\Researcher\ResearchController::class, 'show'])->name('researcher-account.my-researches.show');
    Route::delete('/my-researches/delete/{id}', [\App\Http\Controllers\Researcher\ResearchController::class, 'destroy'])->name('researcher-account.my-researches.delete');
    Route::get('/add-research', [\App\Http\Controllers\Researcher\ResearchController::class, 'create'])->name('RevResAccount.AddResearch');
});
Route::get('/add-research', [ResearchController::class,'create'])->name('RevResAccount.AddResearch');
Route::post('/add-research', [ResearchController::class,'store'])->name('RevResAccount.SaveResearch');

//الطلبات
Route::get('/reviewer/requests/{id}', [ReviewerRequestController::class, 'show'])->name('reviewer.requests.show');

// افبل او ارفض
Route::post('/reviewer/requests/{id}/accept', [ReviewerRequestController::class, 'accept'])->name('reviewer.requests.accept');
Route::post('/reviewer/requests/{id}/reject', [ReviewerRequestController::class, 'reject'])->name('reviewer.requests.reject');

Route::get('/reviewer/requests', [ReviewerRequestController::class, 'index'])->name('reviewer.requests.index');
Route::get('/reviewer/request-details/{id}', [ReviewerRequestController::class, 'show'])->name('reviewer.requests.show');
Route::post('/review-form/store', [ReviewFormController::class, 'store'])->name('reviewForm.store');
Route::get('/reviewer/request-details/{id}', [ReviewerController::class, 'showRequestDetails'])->name('RevResAccount.RequestDetailsIfAccept');
Route::get('/review-form/{request_id}', [ReviewController::class, 'showForm'])->name('review.form');
Route::post('/review-form/save', [ReviewController::class, 'store'])->name('review.store');
Route::get('/reviewer/feedbacks', [ReviewerController::class, 'listReviewedResearches'])->name('reviewer.feedbacks');
Route::post('/reviewer/feedbacks/send', [ReviewerController::class, 'submitFeedback'])->name('reviewer.feedbacks.submit');


Route::middleware(['auth', 'role:reviewer'])->group(function () {
    Route::get('/reviewer/profile', [ReviewerProfileController::class, 'show'])->name('reviewer.profile');
    Route::post('/reviewer/profile/update', [ReviewerProfileController::class, 'update'])->name('reviewer.profile.update');
});




Route::get('/promotion/request/{id}', [PromotionController::class, 'show']);
Route::get('/research/{id}/feedbacks', [FeedbackController::class, 'getFeedbacks']);
Route::get('/promotion/request/{id}', [PromotionController::class, 'showRequestDetails'])->name('promotion.request.details');
Route::post('/promotion/request/{id}/accept', [PromotionController::class, 'accept'])->name('promotion.request.accept');
Route::post('/promotion/request/{id}/reject', [PromotionController::class, 'reject'])->name('promotion.request.reject');
Route::get('/promotion/requests', [PromotionController::class, 'index'])->name('PromotionAccount.PromotionRequests');
Route::get('/promotion/requests/{status}', [PromotionController::class, 'filterByStatus']);
Route::get('/promotion/request/{id}', [PromotionController::class, 'showe'])->name('PromotionAccount.AcceptOrReject');

Route::get('/promotion/reviewers', [ReviewerController::class, 'index'])->name('PromotionAdmin.Reviewers');

Route::get('/reviewers', [ReviewerController::class, 'index'])->name('reviewers.index');

Route::get('/reviewers/specializations', [ReviewerController::class, 'listSpecializations'])->name('reviewers.specializations');

Route::get('/reviewers/{specialization}', [ReviewerController::class, 'showBySpecialization'])->name('reviewers.bySpecialization');






