<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChocoController;
use App\Http\Controllers\PublicController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PublicController::class, 'index']);
Route::get('about', [PublicController::class, 'about']);
Route::get('chocolate', [PublicController::class, 'chocolate']);
Route::get('testimonial', [PublicController::class, 'testimonial']);
Route::get('contact', [PublicController::class, 'contact']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
