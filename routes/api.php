<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResearchController;
use App\Http\Controllers\Api\AuthController;



Route::prefix(prefix: 'auth')->group(function () {
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('register',[AuthController::class,'register']);
    Route::get('profile',[AuthController::class,'profile'])->middleware('auth:api');
});

// Route::get('/test', function () {
//     return 'Test route working ✅';
// });


// Route::prefix(prefix: 'Researches')->as(value: 'Researches.')->group(function () {
//     Route::get('/',[ResearchController::class,'index'])->name('index');
//     Route::get('/{id}',[ResearchController::class,'show'])->name('show');
//     Route::get('create',[ResearchController::class,'create'])->name('create');
//     Route::get('/',[ResearchController::class,'store'])->name('store');
//     Route::delete('/{id}',[ResearchController::class,'delete'])->name('delete');

// });
