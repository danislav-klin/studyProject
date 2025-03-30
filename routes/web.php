<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');

Route::get('/courses', fn () => 'courses')->name('course');

Route::get('/contact', fn () => 'contact')->name('contact');

Route::get('/login', fn () => 'login')->name('login');

Route::get('/register', fn () => 'register')->name('register');
