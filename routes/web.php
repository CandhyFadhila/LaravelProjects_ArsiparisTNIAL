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
	/* LOGIN */
	Route::get('/', 'signin');
	Route::post('/login', 'signin_code')->name('signin.code');
	/* END LOGIN */

	/* REGISTRATION */
	Route::get('/signup', 'signup');
	Route::post('/registration', 'signup_code')->name('signup.code');
	/* END REGISTRATION */

	// TODO | LOGOUT
	Route::get('/logout', 'logout');
});

Route::get('dashboard', [DashboardController::class,'index']);

// Route::resource('/ket', KeteranganSuratController::class);
