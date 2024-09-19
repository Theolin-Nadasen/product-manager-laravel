<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class,'index'])->name('product.index');
Route::get('/products/create', [ProductController::class,'create'])->name('product.create');
Route::post('/products',[ProductController::class, 'store'])->name('product.store');
Route::delete('/products/{product}/delete', [ProductController::class, 'destroy'])->name('product.delete');
Route::get('/products/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/products/{product}/update', [ProductController::class,'update'])->name('product.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
