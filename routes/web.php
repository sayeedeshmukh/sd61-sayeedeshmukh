<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/education', 'education')->name('education');
Route::view('/skills', 'skills')->name('skills');
Route::view('/fav', 'fav')->name('fav');

