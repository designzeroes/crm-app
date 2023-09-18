<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobFrontController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/applier_candidates/{id}', [ApplicationController::class, 'index'])->name('applier_candidates');
Route::get('/view_candidates/{id}', [ApplicationController::class, 'view'])->name('view_candidates');
Route::put('/select_candidate/{id}', [ApplicationController::class, 'select'])->name('select_candidate');

Route::get('/jobs', [JobFrontController::class, 'FrontJobList'])->name('frontjoblist');
Route::get('/apply/{job_id}', [JobFrontController::class, 'apply'])->name('apply');
Route::get('/applied_edit/{id}', [JobFrontController::class, 'applied_edit'])->name('applied_edit');
Route::delete('/applied_destroy/{id}', [JobFrontController::class, 'applied_distroy'])->name('applied_destroy');
Route::get('/view-applied', [JobFrontController::class, 'view_applied'])->name('view-applied');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:organization|employee'])->group(function () {
        Route::resource('job', JobController::class);
    });
    Route::middleware(['role:organization|super-admin'])->group(function () {
        Route::resource('employee', EmployeeController::class);
    });
});




Route::get('/dashboard', function () {
    return view('pages.controlpanel.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';