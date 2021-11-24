<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;

Route::get('/', [maincontroller::class, 'inicio']) ->name('inicio');
