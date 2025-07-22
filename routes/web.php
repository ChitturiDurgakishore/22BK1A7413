<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Login',[UserController::class,'LoginAssigningToken']);
Route::post('/GenerateURL',[UserController::class,'URLstored']);
