<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/checklogin', [SessionController::class, 'checklogin'])->name('checklogin');
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/register', [Controller::class, 'register'])->name('register');
Route::post('/registration', [RegistrationController::class, 'register'])->name('registration');
Route::get('/account', [Controller::class, 'account'])->name('account');

Route::get('recipeBook', function () {
    return view('recipeBook');
});


Route::get('cardFeatured', function () {
    return view('cardFeatured');
});
