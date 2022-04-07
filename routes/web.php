<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController, FrontendController, AdminController, StaffController, CustomerController, AreaController, CompanyController, PackageController, ProfileController, TransactionOptionController, TransactionTypeController, BillGenerateController};

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



            


/*
|--------------------------------------------------------------------------
|                              ROUTE FOR AUTH
|--------------------------------------------------------------------------
*/
Auth::routes();



/*
|--------------------------------------------------------------------------
|                          FRONTEND CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'frontpage'])->name('frontpage');



/*
|--------------------------------------------------------------------------
|                          HOME CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');



/*
|--------------------------------------------------------------------------
|                          AREA CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('area', AreaController::class);
Route::get('/update/area/status/{id}', [AreaController::class, 'updateStatus'])->name('area.status');



/*
|--------------------------------------------------------------------------
|                          ADMIN CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('admin', AdminController::class);
Route::get('/update/admin/status/{id}', [AdminController::class, 'updateStatus'])->name('admin.status');



/*
|--------------------------------------------------------------------------
|                          STAFF CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('staff', StaffController::class);
Route::get('/update/staff/status/{id}', [StaffController::class, 'updateStatus'])->name('staff.status');



/*
|--------------------------------------------------------------------------
|                          CUSTOMER CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('customer', CustomerController::class);
Route::get('/update/customer/status/{id}', [CustomerController::class, 'updateStatus'])->name('customer.status');
Route::get('/active/customer', [CustomerController::class, 'activeCustomer'])->name('active.customer');
Route::get('/deactive/customer', [CustomerController::class, 'deactiveCustomer'])->name('deactive.customer');



/*
|--------------------------------------------------------------------------
|                          COMPANY CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/company/profile', [CompanyController::class, 'index'])->name('company.profile');
Route::post('/company/profile/update', [CompanyController::class, 'update'])->name('company.update');



/*
|--------------------------------------------------------------------------
|                          PROFILE CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('profile', ProfileController::class);



/*
|--------------------------------------------------------------------------
|                          PACKAGE CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('package', PackageController::class);
Route::get('/update/package/status/{id}', [PackageController::class, 'updateStatus'])->name('package.status');



/*
|--------------------------------------------------------------------------
|                          TRANSACTION OPTION CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('transaction-option', TransactionOptionController::class);
Route::get('/update/transaction/option/status/{id}', [TransactionOptionController::class, 'updateStatus'])->name('transaction.option.status');



/*
|--------------------------------------------------------------------------
|                          TRANSACTION TYPE CONTROLLER
|--------------------------------------------------------------------------
*/
Route::resource('transaction-type', TransactionTypeController::class);
Route::get('/update/transaction/type/status/{id}', [TransactionTypeController::class, 'updateStatus'])->name('transaction.type.status');



/*
|--------------------------------------------------------------------------
|                          BILL GENERATE CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/generate/monthly/bill', [BillGenerateController::class, 'gMonthlyBill'])->name('monthly.bill.generate');
Route::post('/search/monthly/bill', [BillGenerateController::class, 'searchForBill'])->name('search.monthly.bill');