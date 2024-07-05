<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriUmkmController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\UmkmController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/admin', [AdminController::class, 'index']);
    route::get('/admin/kabkota', [KabkotaController::class, 'index']);
    route::get('/admin/kategoriumkm', [KategoriUmkmController::class, 'index']);
    route::get('/admin/Pembina', [PembinaController::class, 'index']);
    route::get('/admin/provinsi', [ProvinsiController::class, 'index']);
    route::get('/admin/umkm', [UmkmController::class, 'index']);


    // Kabkota
    route::get('/admin/kelurahan', [KabkotaController::class, 'index']);
    route::get('/admin/kabkota/create', [KabkotaController::class, 'create']);
    route::post('/admin/kabkota/store', [KabkotaController::class, 'store']);
    route::get('/admin/kabkota/show/{id}', [KabkotaController::class, 'show']);
    route::get('/admin/kabkota/edit/{id}', [KabkotaController::class, 'edit']);
    route::put('/admin/kabkota/update/{id}', [KabkotaController::class, 'update']);
    route::delete('/admin/kabkota/destroy/{id}', [KabkotaController::class, 'destroy']);
    
    
    
    // Route::middleware('admin')->group(function () {

    // Kategori Umkm
    route::get('/admin/kategoriumkm', [KategoriUmkmController::class, 'index']);
    route::get('/admin/kategoriumkm/create', [KategoriUmkmController::class, 'create']);
    route::post('/admin/kategoriumkm/store', [KategoriUmkmController::class, 'store']);
    route::get('/admin/kategoriumkm/show/{id}', [KategoriUmkmController::class, 'show']);
    route::get('/admin/kategoriumkm/edit/{id}', [KategoriUmkmController::class, 'edit']);
    route::Put('/admin/kategoriumkm/update/{id}', [KategoriUmkmController::class, 'update']);
    route::delete('/admin/kategoriumkm/destroy/{id}', [KategoriUmkmController::class, 'destroy']);

    // Pembina
    route::get('/admin/pembina', [PembinaController::class, 'index']);
    route::get('/admin/pembina/create', [PembinaController::class, 'create']);
    route::post('/admin/pembina/store', [PembinaController::class, 'store']);
    route::get('/admin/pembina/show/{id}', [PembinaController::class, 'show']);
    route::get('/admin/pembina/edit/{id}', [PembinaController::class, 'edit']);
    route::Put('/admin/pembina/update/{id}', [PembinaController::class, 'update']);
    route::delete('/admin/pembina/destroy/{id}', [PembinaController::class, 'destroy']);

    // Provinsi
    route::get('/admin/provinsi', [ProvinsiController::class, 'index']);
    route::get('/admin/provinsi/create', [ProvinsiController::class, 'create']);
    route::post('/admin/provinsi/store', [ProvinsiController::class, 'store']);
    route::get('/admin/provinsi/show/{id}', [ProvinsiController::class, 'show']);
    route::get('/admin/provinsi/edit/{id}', [ProvinsiController::class, 'edit']);
    route::Put('/admin/provinsi/update/{id}', [ProvinsiController::class, 'update']);
    route::delete('/admin/provinsi/destroy/{id}', [ProvinsiController::class, 'destroy']);

    // Umkm
    route::get('/admin/umkm', [UmkmController::class, 'index']);
    route::get('/admin/umkm/create', [UmkmController::class, 'create']);
    route::post('/admin/umkm/store', [UmkmController::class, 'store']);
    route::get('/admin/umkm/show/{id}', [UmkmController::class, 'show']);
    route::get('/admin/umkm/edit/{id}', [UmkmController::class, 'edit']);
    route::Put('/admin/umkm/update/{id}', [UmkmController::class, 'update']);
    route::delete('/admin/umkm/destroy/{id}', [UmkmController::class, 'destroy']);
    });
// });

require __DIR__.'/auth.php';
