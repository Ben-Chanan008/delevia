<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserType;
use App\Http\Middleware\JobsAuthentication;
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
        Route::post('store','store')->name('user.store');
        Route::post('login','login')->name('user.login');
        Route::view('register','user.register')->name('register');
        Route::view('login','user.login')->name('login')->middleware('guest');
    });
});

Route::controller(JobsController::class)->group(function () {
    Route::middleware([CheckUserType::class])->group(function () {
        Route::prefix('jobs')->group(function () {
            Route::get('/seeker', 'seeker')->name('jobs.seeker')->middleware('auth');
            Route::get('/giver','giver')->name('jobs.giver')->middleware('auth');
            Route::middleware([JobsAuthentication::class])->group(function () {
                Route::get('/giver/{user}/create','show_create')->name('jobs.create')->middleware('auth');
                Route::post('/giver/{user}/store','create')->name('jobs.store')->middleware('auth');
                Route::get('/giver/{job}/applicants', 'job_applicants')->name('jobs.view-applicants')->middleware('auth');
                Route::get('/giver/{user}/edit/{job}', 'show_edit')->name('jobs.show_edit')->middleware('auth');
                Route::post('/giver/{user}/edit/{job}', 'edit_job')->name('jobs.edit')->middleware('auth');
                Route::get('/giver/{job}/applicants/{applicant}', 'show_application')->name('jobs.applicants')->middleware('auth');
                Route::get('/giver/{user}/delete/{job}', 'delete_job')->name('jobs.delete')->middleware('auth');
            });
        });
    });
});

Route::get('permissions', [UserController::class, 'permissions'])->name('permission');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('forgot-password', [UserController::class, 'forgot_password'])->name('forgot-password');

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('services', 'services')->name('services');
Route::view('contact', 'contact')->name('contact');
Route::view('forgot-password', 'partials.forgot-password')->name('forgot.password');
