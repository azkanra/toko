<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', [Controller::class, 'index'])->name('Home');
Route::get('/kategori', [Controller::class, 'kategori'])->name('kategori');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

Route::get('/admin', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/product', [Controller::class, 'product'])->name('product');
Route::get('/admin/user_management', [Controller::class, 'userManagement'])->name('userManagement');
Route::get('/admin/report', [Controller::class, 'report'])->name('report');