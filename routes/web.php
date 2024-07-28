<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\QueryBuilderController;

Route::get('/', function () {
    return view('welcome');
});

// connect database
Route::get('users',[UserController::class,'users']);


// model
Route::get('student',[StudentController::class,'getStudent']);


// http client

Route::get('data',[HttpController::class,'getData']);


// queybuilder

Route::get('query',[QueryBuilderController::class,'queries']);
