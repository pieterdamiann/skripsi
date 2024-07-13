<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PartaiController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

    Route::get('/', function () {
        return view('home');
    });
    
    route::get('/berita', [BeritaController::class, 'show'])->name('showberita');
    
    Route::get('/partai', function () {
        return view('partai');
    });
    
    Route::get('/tentangpemilu', function () {
        return view('tentangpemilu');
    });
    
    Route::get('/suratpemilu', function () {
        return view('suratpemilu');
    });
    
    Route::get('/tentangpemilu', function () {
        return view('tentangpemilu');
    });
    
    Route::get('/tentangkami', function () {
        return view('tentangkami');
    });
    
    Route::get('/lokasicoblos', function () {
        return view('lokasicoblos');
    });
    
    Route::get('/persiapan', function () {
        return view('persiapan');
    });
});

Route::get('/admin', function () {
    return view('admin.adminhomepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // route::get('/berita', [BeritaController::class, 'create'])->name('berita');
    route::get('/addberita', [BeritaController::class, 'create'])->name('berita');
    route::post('/addberita', [BeritaController::class, 'store'])->name('add.berita');
    route::get('/addpartai', [PartaiController::class, 'create'])->name('partai');
    route::post('/addpartai', [PartaiController::class, 'store'])->name('add.partai');
    route::get('/addberita', [BeritaController::class, 'create'])->name('berita');
    route::post('/addberita', [BeritaController::class, 'store'])->name('add.berita');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
