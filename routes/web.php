<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index'])->name('home');



Route::get('cardFeatured', function () {
    return view('recipes.components.cardFeatured')

});
