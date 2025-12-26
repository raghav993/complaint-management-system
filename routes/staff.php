<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffComplaintController;


// Route::middleware('auth:staff')->group(function () {
    Route::prefix('staff')->name('staff.')
        ->group(function () {
            Route::get('/dashboard', [StaffController::class, 'dashboard'])->name('dashboard');
            Route::get('/profile', [StaffController::class, 'showProfile'])->name('profile');
            Route::post('/profile', [StaffController::class, 'updateProfile'])->name('profile.update');
            Route::get('/sections', [StaffController::class, 'sections'])->name('sections');
            Route::get('/complaints', [StaffComplaintController::class, 'index'])->name('complaints');
            Route::get('/software', [StaffController::class, 'software'])->name('software');
            Route::get('/hardware', [StaffController::class, 'hardware'])->name('hardware');
            Route::get('/reports', [ReportController::class, 'index'])->name('reports');
            Route::post('/reports', [ReportController::class, 'filter'])->name('reports.filter');
        });
// });
