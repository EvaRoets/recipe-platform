<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/checklogin', [Controller::class, 'checklogin']);
Route::get('/successlogin', [Controller::class, 'successlogin']);
Route::get('/logout', [Controller::class, 'logout']);

Route::get('recipeBook', function () {
    return view('recipeBook');
});


Route::get('cardFeatured', function () {
    return view('cardFeatured');
});
