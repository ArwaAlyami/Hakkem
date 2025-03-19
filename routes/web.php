<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', function () {
    return view('Main_Pages.Main.GetStarted');
});

Route::get('/About_Hakkem', function () {
    return view('Main_Pages.Main.AboutUs');
});

Route::get('/Home', function () {
    return view('Main_Pages.Main.Home');
});


Route::prefix('auth')->as('admin.')->group(function () {
    Route::get('login',[AuthController::class,'login']);
    Route::post('login-post',[AuthController::class,'authenticate'])->name('login');
    Route::post('register',[AuthController::class,'register'])->name('register');
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('profile',[AuthController::class,'profile'])->middleware('auth');
});
