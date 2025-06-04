<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda',);
});

Route::get('/edukasi', function () {
    return view('edukasi',);
});

Route::get('/volunteer', function () {
    return view('volunteer',);
});

Route::get('/profile', function () {
    return view('profile',);
});

Route::get('/artikel1', function () {
    return view('artikel1',);
});

Route::get('/artikel2', function () {
    return view('artikel2',);
});

Route::get('/artikel3', function () {
    return view('artikel3',);
});

Route::get('/daftar1', function () {
    return view('daftar1',);
});

Route::get('/daftar2', function () {
    return view('daftar2',);
});

Route::get('/daftar3', function () {
    return view('daftar3',);
});

Route::get('/sponsorship', function () {
    return view('sponsorship',);
});
