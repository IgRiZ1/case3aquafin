<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminOrderController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/register', function () {
    return view('register.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/startpagina', function () {
        $categories = \App\Models\Category::all();
        return view('startpagina.index', compact('categories'));
    });
    // Admin routes
    Route::get('/admin/producten', function (\Illuminate\Http\Request $request) {
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        return app(\App\Http\Controllers\AdminProductController::class)->index($request);
    })->name('admin.producten.index');
    Route::get('/admin/producten/{id}/edit', function ($id) {
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        return app(\App\Http\Controllers\AdminProductController::class)->edit($id);
    })->name('admin.producten.edit');
    Route::put('/admin/producten/{id}', function ($id) {
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        return app(\App\Http\Controllers\AdminProductController::class)->update(request(), $id);
    })->name('admin.producten.update');
    Route::delete('/admin/producten/{id}', function ($id) {
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        return app(\App\Http\Controllers\AdminProductController::class)->destroy($id);
    })->name('admin.producten.destroy');
    Route::get('/admin/producten/create', function () {
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        return app(\App\Http\Controllers\AdminProductController::class)->create();
    })->name('admin.producten.create');
    Route::post('/admin/producten', function () {
        if (!auth()->user() || !auth()->user()->is_admin) {
            abort(403);
        }
        return app(\App\Http\Controllers\AdminProductController::class)->store(request());
    })->name('admin.producten.store');
    Route::get('/admin/orders', [\App\Http\Controllers\AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/admin/orders/{id}', [\App\Http\Controllers\AdminOrderController::class, 'show'])->name('admin.orders.show');
    Route::delete('/admin/orders/{id}', [\App\Http\Controllers\AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');
});

Route::get('/producten', [ProductController::class, 'index'])->name('producten.index');

Route::get('/producten/{id}', [ProductController::class, 'show'])->name('producten.show');

Route::get('/winkelmandje', function () {
    return view('producten.cart');
});

Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/cart/order', [CartController::class, 'order'])->name('cart.order');
Route::get('/cart/confirmation', function () {
    return view('producten.confirmation');
})->name('cart.confirmation');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
