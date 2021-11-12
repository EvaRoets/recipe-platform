<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [Controller::class, 'index'])->name('home');
Route::post('/checklogin', [SessionController::class, 'checklogin'])->name('checklogin');
Route::get('/login', [Controller::class, 'login'])->name('login');

Route::get('/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('/confirm-logout', [Controller::class, 'confirmLogout'])->name('confirmLogout');

Route::get('/register', [Controller::class, 'register'])->name('register');
Route::post('/registration', [RegistrationController::class, 'registration'])->name('registration');

Route::get('/account', [Controller::class, 'account'])->name('account');

Route::get('/recipeBook', [Controller::class, 'recipeBook'])->name('recipeBook');
Route::get('/save', [Controller::class, 'savePost'])->name('save');
Route::get('/search', [Controller::class, 'search'])->name('search');
Route::get('/details', [Controller::class, 'details'])->name('details');
//Route::get('/recipeBook', [Controller::class, 'detailsCard'])->name('details');

Route::get('/creator', [PostController::class, 'creator'])->name('creator');
Route::post('/createpost', [PostController::class, 'createpost'])->name('createpost');
Route::get('/settings', [Controller::class, 'settings'])->name('settings');

//TODO: check all routes
