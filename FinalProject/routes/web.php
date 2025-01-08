<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/product', [AdminController::class, 'product']);

route::get('/', [HomeController::class, 'index']);

route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
