<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PartaiController;
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

Route::get('/', function () {
    return view('home');
});
route::get('/berita', [BeritaController::class, 'show'])->name('showberita');
Route::get('/partai', function () {
    return view('partai');
});
Route::get('/partaidetail', function () {
    return view('detailpartai');
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
    Route::get('/admin+homepage', function () {
        return view('adminhomepage');
    });
    Route::get('/admin+login', function () {
        return view('login');
    });
    Route::get('/admin+register', function () {
        return view('register');
    });
    Route::get('/admin+partai', function () {
        return view('adpartai');
    });
    Route::get('/admin+tentangpemilu', function () {
        return view('adtentangpemilu');
    });
    Route::get('/admin+berita', function () {
        return view('adberita');
    });
    Route::get('/tambah+berita', function () {
        return view('tambahberita');
    });
    Route::get('/edit+berita', function () {
        return view('editberita');
    });
    Route::get('/delete+berita', function () {
        return view('deleteberita');
    });
    Route::get('/tambah+partai', function () {
        return view('tambahpartai');
    });
    Route::get('/edit+partai', function () {
        return view('editpartai');
    });
    Route::get('/delete+partai', function () {
        return view('deletepartai');
    });
    Route::get('/tambah+tp', function () {
        return view('tambahtp');
    });
    Route::get('/edit+tp', function () {
        return view('edittp');
    });
    Route::get('/delet+tp', function () {
        return view('delettp');
    });
});
