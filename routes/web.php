<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('order'));

Route::get('order-confirmed', fn () => view('order-confirmed'))->name('order-confirmed');
