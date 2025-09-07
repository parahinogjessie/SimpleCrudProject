<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
//This is for Register route
Route::post('/register', [UserController::class,'register']); 

//This is for Login and Logout route
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);