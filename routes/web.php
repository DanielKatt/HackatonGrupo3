<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::resource('courses', App\Http\Controllers\CourseController::class);
Route::get('course/{course:slug}', [PageController::class, 'course'])->name('course');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home/search/', 'CourseController@search')->name('search');


