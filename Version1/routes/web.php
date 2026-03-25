<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get', function () {
    return view('welcome');
});

Route::get('/cursor-demo', function () {
    return view('welcome');
});
