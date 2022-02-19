<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route view
Route::view('/home','viewname');

//route redirect
Route::redirect('/lama','/baru',301);

//route param
Route::get('/user/{id}', function($id){
    return 'User ID : ' . $id;
});

//route with optional param
Route::get('/user/{id?}', function($id){
    return 'User ID : ' . $id;
});

//route with required parameter and controller laravel 8
Route::get('/user/{id}', [UserController::class, 'show']);
