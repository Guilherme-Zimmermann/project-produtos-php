<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/novo', [ProductController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProductController::class, 'store'])->name('produtos.store');
Route::get('/produtos/edita/{id}', [ProductController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('produtos.update');
Route::get('/produtos/sucesso', [ProductController::class, 'success'])->name('produtos.success');
