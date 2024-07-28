<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

// connect database
Route::get('users',[UserController::class,'users']);


// model
ROute::get('student',[StudentController::class,'getStudent']);