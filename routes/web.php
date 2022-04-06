<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController, FrontendController, AdminController, StaffController, CustomerController, AreaController, CompanyController, PackageController, ProfileController, TransactionOptionController, TransactionTypeController};

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
// AreaController
//==================
Route::resource('area', AreaController::class);
Route::get('/update/area/status/{id}', [AreaController::class, 'updateStatus'])->name('area.status');



//==================
// AdminController
//==================
Route::resource('admin', AdminController::class);
Route::get('/update/admin/status/{id}', [AdminController::class, 'updateStatus'])->name('admin.status');



//==================
// StaffController
//==================
Route::resource('staff', StaffController::class);
Route::get('/update/staff/status/{id}', [StaffController::class, 'updateStatus'])->name('staff.status');



//===================
// CustomerController
//===================
Route::resource('customer', CustomerController::class);
Route::get('/update/customer/status/{id}', [CustomerController::class, 'updateStatus'])->name('customer.status');
Route::get('/active/customer', [CustomerController::class, 'activeCustomer'])->name('active.customer');
Route::get('/deactive/customer', [CustomerController::class, 'deactiveCustomer'])->name('deactive.customer');



//==================
// CompanyController
//==================
Route::get('/company/profile', [CompanyController::class, 'index'])->name('company.profile');
Route::post('/company/profile/update', [CompanyController::class, 'update'])->name('company.update');



//==================
// ProfileController
//==================
Route::resource('profile', ProfileController::class);



//==================
// PackageController
//==================
Route::resource('package', PackageController::class);
Route::get('/update/package/status/{id}', [PackageController::class, 'updateStatus'])->name('package.status');



//============================
// TransactionOptionController
//============================
Route::resource('transaction-option', TransactionOptionController::class);
Route::get('/update/transaction/option/status/{id}', [TransactionOptionController::class, 'updateStatus'])->name('transaction.option.status');



//============================
// TransactionTypeController
//============================
Route::resource('transaction-type', TransactionTypeController::class);
Route::get('/update/transaction/type/status/{id}', [TransactionTypeController::class, 'updateStatus'])->name('transaction.type.status');