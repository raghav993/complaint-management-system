<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ComplaintController1;
use App\Http\Controllers\Admin\AdminController;
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



Route::prefix('user')->name('user.')
    ->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
        Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile.update');

    });

Route::get('/complaint/create', [ComplaintController1::class,'create'])->name('complaint.create');
Route::post('/complaint', [ComplaintController1::class,'store'])->name('complaint.store');
Route::get('/complaints', [ComplaintController1::class,'index'])->name('complaints');
Route::get('/complaint/{id}', [ComplaintController1::class,'index'])->name('complaint.show');
// Route::get('/complaints', [ComplaintController1::class,'index'])->name('complaints.ed');

Route::post('/complaints/assign-ka', [ComplaintController1::class, 'assignKa']);

include 'admin.php';