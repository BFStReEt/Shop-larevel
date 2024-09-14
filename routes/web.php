<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

#Login
#Hello
Route::prefix('admin')->group(function () {
    Route::get('/users/login', [LoginController::class, 'index'])->name('login');
    Route::post('/users/login/store', [LoginController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        #Main
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('/main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('/add', [MenuController::class, 'create']);
            Route::post('/add', [MenuController::class, 'store']);
        });
    });
});