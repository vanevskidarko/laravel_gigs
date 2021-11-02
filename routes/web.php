<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::loginUsingId(4);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/gigs/create', '\App\Http\Controllers\GigController@create');

Route::post('/gigs', '\App\Http\Controllers\GigController@store');

Route::get('/gigs', '\App\Http\Controllers\GigController@index')->name('gigs');

Route::post('/handle', '\App\Http\Controllers\AttendanceController@handle');
