<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/checklogin', [SessionController::class, 'checklogin']);
Route::get('/successlogin', [SessionController::class, 'successlogin']);
Route::get('/logout', [SessionController::class, 'logout']);
Route::get('/register', [Controller::class, 'register']);
Route::post('/registration', [RegistrationController::class, 'register']);

Route::get('recipeBook', function () {
    return view('recipeBook');
});


Route::get('cardFeatured', function () {
    return view('cardFeatured');
});
