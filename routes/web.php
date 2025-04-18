<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', IndexController::class)->name('index');

Route::controller(CourseController::class)
    ->prefix('courses')
    ->name('courses.')
    ->group(function () {

        Route::get('/', [CourseController::class, 'index'])->name('index');

        Route::get('/{course}', [CourseController::class, 'show'])->name('show');
    });

Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');

Route::view('/contact', 'pages.contact')->name('contact');

Route::view('/login', 'pages.login')->name('login');

Route::view('/register', 'pages.register')->name('register');

Route::view('/terms', 'pages.terms')->name('terms');

Route::view('/privacy', 'pages.privacy')->name('privacy');

