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
Route::get('/recipebook', [Controller::class, 'recipebook'])->name('recipebook');
Route::get('/save', [Controller::class, 'savePost'])->name('save');
Route::get('/search', [Controller::class, 'search'])->name('search');
Route::get('/details', [Controller::class, 'details'])->name('details');

Route::get('cardFeatured', function () {
    return view('cardFeatured');
});
