<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Shared Routes
Route::middleware(['auth', 'role:admin,company-owner'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Job Applications
    Route::resource('job-applications', JobApplicationController::class);
    Route::put('job-applications/{id}/restore', [JobApplicationController::class, 'restore'])->name('job-applications.restore');

    // Job Vacancies
    Route::resource('job-vacancies', JobVacancyController::class);
    Route::put('job-vacancies/{id}/restore', [JobVacancyController::class, 'restore'])->name('job-vacancies.restore');
});

// Company Routes
Route::middleware(['auth', 'role:company-owner'])->group(function () {
    Route::get('/my-company', [CompanyController::class, 'show'])->name('my-company.show');
    Route::get('/my-company/edit', [CompanyController::class, 'edit'])->name('my-company.edit');
    Route::put('/my-company', [CompanyController::class, 'update'])->name('my-company.update');
});

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Job Categories
    Route::resource('job-categories', JobCategoryController::class);
    Route::put('job-categories/{id}/restore', [JobCategoryController::class, 'restore'])->name('job-categories.restore');

    // Users
    Route::resource('users', UserController::class);
    Route::put('users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');

    // Companies
    Route::resource('companies', CompanyController::class);
    Route::put('companies/{id}/restore', [CompanyController::class, 'restore'])->name('companies.restore');
});

Route::middleware(['auth', 'role:job-seeker'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/job-applications', [JobApplicationsController::class, 'index'])->name('job-applications.index');
    Route::get('/job-vacancies/{id}', [JobVacancyController::class, 'show'])->name('job-vacancies.show');
    Route::get('/job-vacancies/{id}/apply', [JobVacancyController::class, 'apply'])->name('job-vacancies.apply');
    Route::post('/job-vacancies/{id}/apply', [JobVacancyController::class, 'processApplication'])->name('job-vacancies.process-application');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
