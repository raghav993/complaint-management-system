<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ComplaintController;

Route::prefix('admin')->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'showProfile'])->name('profile');
        Route::post('/profile', [AdminController::class, 'updateProfile'])->name('profile.update');

        Route::resource('/users', UserController::class);
        Route::get('/sections', [AdminController::class, 'sections'])->name('sections');
        Route::get('/complaints', [ComplaintController::class,'index'])->name('complaints');
        Route::get('/software', [AdminController::class, 'software'])->name('software');
        Route::get('/hardware', [AdminController::class, 'hardware'])->name('hardware');
        Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    });

Route::get('/engineers-by-section/{section}', [AdminController::class, 'bySection']);
Route::post('/complaints/assign', [ComplaintController::class, 'assign'])
    ->name('complaints.assign');

