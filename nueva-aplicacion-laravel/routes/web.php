<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

})->name('home');


Route::get('blog',PostController::)
Route::view('about','about')->name('about');
Route::view( 'blog','blog')->name('blog');
Route::view( 'contact','contact')->name('contact');
 