<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('index');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/admin', [AdminController::class, 'index']);
    // Route::middleware('admin')->group(function () {

    // Kategori Umkm
    route::get('/admin/produks', [ProductController::class, 'index']);
    route::get('/admin/produks/create', [ProductController::class, 'create']);
    route::post('/admin/produks/store', [ProductController::class, 'store']);
    route::get('/admin/produks/show/{id}', [ProductController::class, 'show']);
    route::get('/admin/produks/edit/{id}', [ProductController::class, 'edit']);
    route::Put('/admin/produks/update/{id}', [ProductController::class, 'update']);
    route::delete('/admin/produks/destroy/{id}', [ProductController::class, 'destroy']);

    });
// });

require __DIR__.'/auth.php';
