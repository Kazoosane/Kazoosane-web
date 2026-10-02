<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return redirect('/');
});

Route::get('/incoming', function () {
    return view('incoming');
});
