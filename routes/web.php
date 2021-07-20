<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'home')->name('home');
Route::view('/add_pc', 'add_pc')->name('add_pc');
Route::view('/add_printer', 'add_printer')->name('add_printer');
Route::view('/add_ups', 'add_ups')->name('add_ups');
