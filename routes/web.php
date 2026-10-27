<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/store', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/producto/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/producto/{id}/update', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('/producto/{id}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');