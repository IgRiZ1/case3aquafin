<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/login', fn() => view('login.index'))->name('login');
Route::get('/register', fn() => view('register.index'))->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
