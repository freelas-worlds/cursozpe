<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fanta', function () {
    return view('index');
})->name('index');

Route::get('/outra', function () {
    return view('outra');
})->name('outra');

Route::get('/teste', function () {
    return view('teste');
})->name('teste');

Route::post('/dependencia', function (Request $request) {
    return $request;
});
