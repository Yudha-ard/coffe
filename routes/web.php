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
| Masih GET methode / menunggu controller 
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function() {
    
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('product', [App\Http\Controllers\ProductController::class, 'index'])->name('user.product');
    Route::get('transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('user.transaction');
        
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth','role']], function() {

    Route::get('/', function() { return redirect('admin/dashboard'); });
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product');
    Route::get('transaction', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transaction');

});



