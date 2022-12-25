<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
     return view('home');
});

Auth::routes();

Route::get('/home',function(){
    return view('home');
});
Route::get('/signin',function(){
    return view('signin');
});
Route::get('/signup',function(){
    return view('signup');
});
Route::get('/places',function(){
    return view('places');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/details',function(){
    return view('details');
});
Route::get('/hotel',function(){
    return view('hotel');
});

Route::get('login-form', [LoginController::class, 'mylogin']);
