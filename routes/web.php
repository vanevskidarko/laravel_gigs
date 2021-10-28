<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GigController;
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


Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});




Route::get('/gigs/create', [GigController::class, 'create']);
Route::post('/gigs', [GigController::class, 'store']);
Route::get('/gigs', function () {
    echo "<h1> All gigs page </h1>";
})->name('gigs');
