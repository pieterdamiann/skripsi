<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/berita', function () {
    return view('berita');
});

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

Route::get('/warnakartu', function () {
    return view('warnakartu');
});

Route::get('/lokasicoblos', function () {
    return view('lokasicoblos');
});

Route::get('/persiapan', function () {
    return view('persiapan');
});

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

Route::get('/delete+tp', function () {
    return view('deletetp');
});
Route::get('/partai+pdip', function () {
    return view('partaipdip');
});