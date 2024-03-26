<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProdukController;


Route::get('/dashboard', [PenjualController::class, 'index'])->name('admin');
Route::get('/login', [PenjualController::class, 'login'])->name('login');
Route::get('/user', [PenjualController::class, 'user'])->name('user');
Route::get('/register', [PenjualController::class, 'register'])->name('register');
Route::post('/register', [PenjualController::class, 'inputRegister'])->name('register.post');
Route::post('/login', [PenjualController::class, 'auth'])->name('login.auth');
Route::get('/logout', [PenjualController::class, 'logout'])->name('logaut');


Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
Route::Post('/produk', [ProdukController::class, 'store'])->name('store.produk');
Route::delete('/hapus/{id}', [ProdukController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
Route::patch('/ubah/{id}', [ProdukController::class, 'update'])->name('ubah');