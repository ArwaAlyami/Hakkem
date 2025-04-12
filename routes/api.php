<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Authcontroller;

use function PHPUnit\Framework\callback;

Route::prefix(prefix: 'Auth')->group(callback:function () :void{
    Route::post(uri: 'SignIn' , action:  [Authcontroller::class,'SignIn']);
    Route::post(uri: 'register' , action:  [Authcontroller::class,'register']);
    Route::post(uri: 'SignUp', action:  [Authcontroller::class,'SignUp']);
    Route::post(uri: 'me', action:  [Authcontroller::class,'me']);

});





