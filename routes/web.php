<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/producten', [ProductController::class, 'index'])->name('producten.index');
Route::get('/producten/{id}', [ProductController::class, 'show'])->name('producten.show');

Route::get('/login', fn() => view('login.index'))->name('login');
Route::get('/register', fn() => view('register.index'))->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/startpagina', function () {
        return view('startpagina.index');
    })->name('startpagina');
});
