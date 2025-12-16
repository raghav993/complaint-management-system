<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


// Route::get('/', fn() => view('welcome'))->name('home');
Route::get('/',      [LoginController::class, 'showUserLoginForm'])->name('home');

/*
|--------------------------------------------------------------------------
| LOGIN ROUTES (Separate Pages)
|--------------------------------------------------------------------------
*/
Route::get('/login',      [LoginController::class, 'showUserLoginForm'])->name('login.user');
Route::get('/admin/login',     [LoginController::class, 'showAdminLoginForm'])->name('login.admin');

Route::post('/login',      [LoginController::class, 'userLogin']);
Route::post('/admin/login',     [LoginController::class, 'adminLogin']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| REGISTER ROUTES (Separate Pages)
|--------------------------------------------------------------------------
*/
Route::get('/register',      [RegisterController::class, 'showUserRegisterForm'])->name('register.user');
Route::get('/admin',     [RegisterController::class, 'showAdminRegisterForm'])->name('register.admin');

Route::post('/register',      [RegisterController::class, 'userRegister']);
Route::post('/admin',     [RegisterController::class, 'adminRegister']);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'showProfile'])->name('profile');
        Route::post('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');

    });

    Route::prefix('user')->name('user.')
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
        Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile.update');

    });


// Route::get('/insert-users', [UserController::class, 'insertUsersFromSql']);
