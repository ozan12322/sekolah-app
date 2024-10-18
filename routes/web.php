<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/struktur-organisasi', function () {
    return view('struktur');
});

Route::get('/tenaga-pengajar', function () {
    return view('pengajar');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/information', [HomeController::class, 'information'])->name('information');

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/tambah-berita', [AdminController::class, 'tambah'])->name('admin.tambah');
    Route::post('/dashboard/submit', [AdminController::class, 'submit'])->name('admin.submit');
    Route::get('/dashboard/edit-berita/{id}', [AdminController::class, 'edit'])->name('admin.edit');
});

require __DIR__.'/auth.php';
