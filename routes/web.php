<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/service', function () {
    return view('service');
})->name('services');

Route::get('/chaplaincy', function () {
    return view('chaplaincy');
})->name('chaplaincy');

Route::get('/activity', function () {
    return view('activity');
})->name('activity');
