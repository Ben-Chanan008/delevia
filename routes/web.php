<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('store','store');
        Route::post('login','login');
        Route::view('register','user.register');
        Route::view('login','user.login');
    });
});

Route::get('/permissions', [UserController::class, 'permissions'])->name('permission');
Route::view('/', 'home')->name('home');
