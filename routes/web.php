<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\frontend::class,'home'])->name('home');
Route::get('about-us',[\App\Http\Controllers\frontend::class,'about'])->name('about');
Route::get('service',[\App\Http\Controllers\frontend::class,'service'])->name('service');
Route::get('portfolio',[\App\Http\Controllers\frontend::class,'portfolio'])->name('portfolio');
Route::get('contact-us',[\App\Http\Controllers\frontend::class,'contact'])->name('contact');
