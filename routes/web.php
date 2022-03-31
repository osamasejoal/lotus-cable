<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController, FrontendController, StaffController, ProfileController};

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

// Route::get('/', function () {
//     return view('welcome');
// });



//===============
// Route for Auth
//===============
Auth::routes();



//===================
// FrontendController
//===================
Route::get('/', [FrontendController::class, 'frontpage'])->name('frontpage');



//===============
// HomeController
//===============
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');



//==================
// StaffController
//==================
Route::resource('staff', StaffController::class);



//==================
// ProfileController
//==================
Route::resource('profile', ProfileController::class);