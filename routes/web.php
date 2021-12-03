<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\login;

Route::get('/', [maincontroller::class, 'inicio']) ->name('inicio');
Route::get('/borrador', [maincontroller::class, 'borrador']) ->name('borrador');
Route::post('/', [login::class, 'login']) ->name('login');

