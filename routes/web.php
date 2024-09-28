<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/education', 'education')->name('education');
Route::view('/skills', 'skills')->name('skills');
Route::view('/contact', 'contact')->name('contact');


Route::get('lang/{lang}', function ($lang) {
    // Store the language in the session
    session(['locale' => $lang]);
    return redirect()->back(); // Redirect back to the same page
})->name('change.language');

Route::get('lang/{lang}', [LanguageController::class, 'switch'])->name('language.switch');



