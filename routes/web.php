<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Producto;
use App\Models\Usuario;

Route::get('/', function () {
    return view('welcome');
});

//rutas para usuarios
Route::get('/user/create', [UsuarioController::class, 'create'])->name('user.create');
Route::post('/user/create', [UsuarioController::class, 'store'])->name('user.store');
Route::get('/user', [UsuarioController::class, 'index'])->name('user.index');
Route::get('/user/update/{id}', [UsuarioController::class, 'edit'])->name('user.update');
Route::put('/user/update/{id}', [UsuarioController::class, 'update'])->name('user.update.data');
Route::delete('/user/delete/{id}', [UsuarioController::class, 'destroy'])->name('user.destroy');

Route::get('/product/create', [ProductoController::class, 'create'])->name('product.create');
Route::post('/product/create', [ProductoController::class, 'store'])->name('product.store');
Route::get('/product', [ProductoController::class, 'index'])->name('product.index');
Route::get('/product/update/{id}', [ProductoController::class, 'edit'])->name('product.update');
Route::put('/product/update/{id}', [ProductoController::class, 'update'])->name('product.update.data');
Route::delete('/product/delete/{id}', [ProductoController::class, 'destroy'])->name('product.destroy');