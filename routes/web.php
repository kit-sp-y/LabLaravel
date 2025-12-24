<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team/{name?}', [MyController::class, 'showPath']);
Route::get('/company/{name?}', [MyController::class, 'showCompany']);