<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\RouteController;

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

// route

// Route::get('getroute',[RouteController::class,'get']);
// Route::post('getroute',[RouteController::class,'post']);
// Route::put('getroute',[RouteController::class,'put']);
// Route::delete('getroute',[RouteController::class,'delete']);
// Route::patch('getroute',[RouteController::class,'patch']);

// // call all method in one method
// Route::any('getroute',[RouteController::class,'any']);

Route::match(['post','get'],'getroute',[RouteController::class,'group1']);
Route::match(['put','delete'],'getroute',[RouteController::class,'group2']);

Route::view('form','ruteview');
