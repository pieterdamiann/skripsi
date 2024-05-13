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