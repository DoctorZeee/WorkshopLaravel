<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user/{id}', [HomeController::class, 'show'])->name('users.show');

//membuat alamat baru
// Name digunakan untuk memberikan nama pada sebuah alamat
Route::get('/fitur', function () {
    return view('feature');
})->name('feature');


