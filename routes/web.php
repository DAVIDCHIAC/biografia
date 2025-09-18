<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/margen_exp', function () {
    return view('margen_exp');
});
