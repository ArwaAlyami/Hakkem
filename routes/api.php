<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ResearchController;
use App\Http\Controllers\Api\MyResearchesController2;

use App\Http\Controllers\Api\AuthController;



Route::prefix('auth')->group(function () {
    Route::post('login',[AuthController::class,'login']);
    Route::post('logout',[AuthController::class,'logout']);
    Route::post('register',[AuthController::class,'register']);
    Route::get('profile',[AuthController::class,'profile'])->middleware('auth:api');
});

// Route::get('/test', function () {
//     return 'Test route working ✅';
// });


// Route::prefix(prefix: 'researches')->as(value: 'Researches.')->group(function () {
//     Route::get('index',[MyResearchesController2::class,'index'])->name('index');
//     Route::get('create',[MyResearchesController2::class,'create'])->name('create');
//     Route::get('/',[MyResearchesController2::class,'store'])->name('store');
//     Route::get('/{id}',[MyResearchesController2::class,'show'])->name('show');
//     Route::delete('/{id}',[MyResearchesController2::class,'delete'])->name('delete');

// });

Route::prefix('researches')->group(function () {
    Route::get('/', [MyResearchesController2::class, 'index'])->name(name: 'index');
    Route::post('/store', [MyResearchesController2::class, 'store'])->name(name: 'store');

});
