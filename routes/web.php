<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/penjualan', [TransactionController::class, 'index'])->name('penjualan.index')->middleware('auth');
Route::get('/penjualan/create', [TransactionController::class, 'create'])->middleware('auth');
Route::post('/penjualan', [TransactionController::class, 'store'])->name('penjualan.store')->middleware('auth');
Route::get('/penjualan/{id}/edit', [TransactionController::class, 'edit'])->middleware('auth');
Route::post('/penjualan/{id}', [TransactionController::class, 'update'])->name('penjualan.update')->middleware('auth');
Route::delete('/penjualan/{id}', [TransactionController::class, 'delete'])->name('penjualan.delete')->middleware('auth');;

Route::get('/detail-penjualan/{transaction:id}', [TransactionDetailController::class, 'index'])->middleware('auth');


Route::get('/barang', [ItemController::class, 'index'])->name('barang.index')->middleware('auth');
Route::get('/barang/create', [ItemController::class, 'create'])->middleware('auth');
Route::post('/barang', [ItemController::class, 'store'])->name('barang.store')->middleware('auth');
Route::get('/barang/{id}/edit', [ItemController::class, 'edit'])->middleware('auth');
Route::post('/barang/{id}', [ItemController::class, 'update'])->name('barang.update')->middleware('auth');
Route::delete('/barang/{id}', [ItemController::class, 'delete'])->name('barang.delete')->middleware('auth');;
