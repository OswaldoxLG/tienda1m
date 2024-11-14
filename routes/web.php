<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Producto;
use App\Models\Usuario;

Route::get('/', function () {
    return view('welcome');
});

//users
Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('user.create');
Route::post('/usuario/create', [UsuarioController::class, 'store'])->name('user.store');
Route::get('/usuario', [UsuarioController::class, 'index'])->name('user.index');
Route::get('/usuario/update/{id}', [UsuarioController::class, 'edit'])->name('user.update');
Route::put('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('user.update.data');
Route::delete('/usuario/delete/{id}', [UsuarioController::class, 'destroy'])->name('user.destroy');

//producto
Route::get('/producto/create', [ProductoController::class, 'create'])->name('product.create');
Route::post('/producto/create', [ProductoController::class, 'store'])->name('product.store');
Route::get('/producto', [ProductoController::class, 'index'])->name('product.index');
Route::get('/producto/update/{id}', [ProductoController::class, 'edit'])->name('product.update');
Route::put('/producto/update/{id}', [ProductoController::class, 'update'])->name('product.update.data');
Route::delete('/producto/delete/{id}', [ProductoController::class, 'destroy'])->name('product.destroy');