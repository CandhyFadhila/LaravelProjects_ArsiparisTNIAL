<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', Controller_Demo::class);

// TODO | AUTH SECTION
Route::controller(AuthController::class)->group(function () {
	Route::get('/', 'signin');

	Route::get('/signup', 'signup');
});

Route::resource('/dashboard', DashboardController::class);

// Route::resource('/ket', KeteranganSuratController::class);
