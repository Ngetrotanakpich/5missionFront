<?php

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

Route::get('/sign_in', function () {
    return view('sign_in');
});

Route::get('/guide', function () {
    return view('guide');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/switzerland', function () {
    return view('switzerland');
});
Route::get('/china', function () {
    return view('china');
});
Route::get('/thailand', function () {
    return view('thailand');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/booking', function () {
    return view('booking');
});

