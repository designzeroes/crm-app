<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployeeController;

Route::get('/w', function () {
    return view('welcome');
});

Route::get('jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('job',[JobController::class, 'index'])->name('job');

Route::middleware(['auth', 'role:organization'])->group(function () {
    Route::resource('job', JobController::class)->name('job');

};
Route::middleware(['auth'])->group(function () {
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