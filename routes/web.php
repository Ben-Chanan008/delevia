<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserType;
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
        Route::view('register','user.register')->name('register');
        Route::view('login','user.login')->name('login')->middleware('guest');
    });
});

Route::controller(JobsController::class)->group(function () {
    Route::middleware([CheckUserType::class])->group(function () {
        Route::prefix('jobs')->group(function () {
            Route::get('/seeker', 'seeker')->name('jobs.seeker')->middleware('auth');
            Route::get('/giver','giver')->name('job.giver')->middleware('auth');
        });
    });
});

Route::get('/permissions', [UserController::class, 'permissions'])->name('permission');
Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
