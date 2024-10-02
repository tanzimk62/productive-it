<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;


Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', [ExampleController::class, 'about'])->name('about');

Route::Post('/register', [ExampleController::class, 'register'])->name('registerpage');
