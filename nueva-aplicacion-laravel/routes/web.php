<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChrismasController;

Route::get('/', function () {
    return view('home');

})->name('home');


//Route::get('blog',PostController::
Route::view('about','about')->name('about');
Route::view( 'blog','blog')->name('blog');
Route::view( 'contact','contact')->name('contact');
Route::get( 'navidad', ChrismasController::class)->name('navidad');
 