<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

Route::get('/details/{id?}', [App\Http\Controllers\DetailsController::class, 'index'])->name('details');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');

Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/product', [App\Http\Controllers\DashboardProductController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/product/add', [App\Http\Controllers\DashboardProductController::class, 'add'])->name('dashboard-product-add');
Route::get('/dashboard/product/details/{id?}', [App\Http\Controllers\DashboardProductController::class, 'details'])->name('dashboard-product-details');

Route::get('/dashboard/account', [App\Http\Controllers\DashboardSettingController::class, 'account'])->name('dashboard-account');
Route::get('/dashboard/setting', [App\Http\Controllers\DashboardSettingController::class, 'setting'])->name('dashboard-setting');

Route::get('/dashboard/transactions', [App\Http\Controllers\DashboardTransactionController::class, 'transaction'])->name('dashboard-transactions');
Route::get('/dashboard/transaction/{id?}', [App\Http\Controllers\DashboardTransactionController::class, 'transactionDetails'])->name('dashboard-transactions-details');

// Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin');
// ->middleware(['auth', 'admin'])
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin');
});
Auth::routes();
