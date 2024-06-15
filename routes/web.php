<?php

use App\Http\Controllers\Notice\CategoryController;
use App\Http\Controllers\Notice\NoticeController;
use Illuminate\Support\Facades\Route;

Route::delete('/{id}', [NoticeController::class, 'destroy'])->name('notice.destroy');
Route::put('/{id}', [NoticeController::class, 'update'])->name('notice.update');
Route::get('/edit/{id}/edit', [NoticeController::class, 'edit'])->name('notice.edit');
Route::get('/create', [NoticeController::class, 'create'])->name('notice.create');
Route::post('/create', [NoticeController::class, 'store'])->name('notice.store');
Route::get('/show/{id}', [NoticeController::class, 'show'])->name('notice.show');
Route::get('/{filter?}', [NoticeController::class, 'index'])->name('notice.index');
Route::get('/notice/list', [NoticeController::class, 'list'])->name('notice.list');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
