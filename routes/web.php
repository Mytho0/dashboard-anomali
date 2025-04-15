<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/regist', function () {
    return view('regist.index');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
});