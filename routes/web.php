<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PartaiController;
use App\Http\Controllers\TentangPemiluController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

route::get('/', [TentangKamiController::class, 'index'])->name('guesthome');
route::get('/berita', [BeritaController::class, 'show'])->name('guestberita');
route::get('/partai', [PartaiController::class, 'show'])->name('guestpartai');
route::get('/partaidetail/{id}', [PartaiController::class, 'detail'])->name('detailpartai');
route::get('/tentangpemilu', [TentangPemiluController::class, 'show'])->name('guesttp');
route::get('/detailpemilu/{id}', [TentangPemiluController::class, 'detail'])->name('guesttpdetail');

Route::middleware('guest')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/admin', function () {
    return view('admin.adminhomepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    route::get('/addberita', [BeritaController::class, 'create'])->name('berita');
    route::post('/addberita', [BeritaController::class, 'store'])->name('add.berita');
    route::get('/listberita', [BeritaController::class, 'list'])->name('listberita');
    route::get('/edit+berita/{id}', [BeritaController::class, 'edit'])->name('editberita');
    route::post('/edit+berita/{id}', [BeritaController::class, 'update'])->name('edit.berita');
    route::post('/delete+berita/{id}', [BeritaController::class, 'destroy'])->name('delete.berita');
    
    route::get('/addpartai', [PartaiController::class, 'create'])->name('partai');
    route::post('/addpartai', [PartaiController::class, 'store'])->name('add.partai');
    route::get('/listpartai', [PartaiController::class, 'list'])->name('listpartai');
    route::get('/edit+partai/{id}', [PartaiController::class, 'edit'])->name('editpartai');
    route::post('/edit+partai/{id}', [PartaiController::class, 'update'])->name('edit.partai');
    route::post('/delete+partai/{id}', [PartaiController::class, 'destroy'])->name('delete.partai');

    route::get('/addtp', [TentangPemiluController::class, 'create'])->name('tp');
    route::post('/addtp', [TentangPemiluController::class, 'store'])->name('add.tp');
    route::get('/listtp', [TentangPemiluController::class, 'list'])->name('listtp');
    route::get('/edit+tp/{id}', [TentangPemiluController::class, 'edit'])->name('edittp');
    route::post('/edit+tp/{id}', [TentangPemiluController::class, 'update'])->name('edit.tp');
    route::post('/delete+tp/{id}', [TentangPemiluController::class, 'destroy'])->name('delete.tp');
    
    route::get('/pilih+partai/{partai_id}/addanggota', [AnggotaController::class, 'create'])->name('anggota');
    route::post('/pilih+partai/{partai_id}/addanggota', [AnggotaController::class, 'store'])->name('add.anggota');
    route::get('/listanggota/{partai_id}', [AnggotaController::class, 'listanggota'])->name('listanggota');
    route::get('/listpartaianggota', [AnggotaController::class, 'list'])->name('listpartai');
    route::get('/pilih+partai/{partai_id}/edit+anggota/{id}', [AnggotaController::class, 'edit'])->name('edit.anggota');
    route::post('/pilih+partai/{partai_id}/edit+anggota/{id}', [AnggotaController::class, 'update'])->name('edit.anggota');
    route::post('/pilih+partai/{partai_id}/delete+anggota/{id}', [AnggotaController::class, 'destroy'])->name('delete.anggota');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});