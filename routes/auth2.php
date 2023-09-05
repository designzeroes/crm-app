<?php

use App\Http\Controllers\CandidateAuth\AuthenticatedSessionController;
use App\Http\Controllers\CandidateAuth\ConfirmablePasswordController;
use App\Http\Controllers\CandidateAuth\EmailVerificationNotificationController;
use App\Http\Controllers\CandidateAuth\EmailVerificationPromptController;
use App\Http\Controllers\CandidateAuth\NewPasswordController;
use App\Http\Controllers\CandidateAuth\PasswordController;
use App\Http\Controllers\CandidateAuth\PasswordResetLinkController;
use App\Http\Controllers\CandidateAuth\RegisteredUserController;
use App\Http\Controllers\CandidateAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('uregister', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('uregister', [RegisteredUserController::class, 'store']);

    Route::get('ulogin', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('ulogin', [AuthenticatedSessionController::class, 'store']);

    Route::get('uforgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('uforgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('ureset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('ureset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('uverify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('uverify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('uemail/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('uconfirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('uconfirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('upassword', [PasswordController::class, 'update'])->name('password.update');

    Route::post('ulogout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
