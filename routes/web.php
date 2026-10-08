<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('checkerboard', [
        'title' => 'CHECKERBOARD',
        'pagetitle' => 'Blade Checkerboard',
        'size' => 8,
    ]);
});