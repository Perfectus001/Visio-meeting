<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Route GET : affiche le formulaire de création de rendez-vous
Route::get('/appointment', [AppointmentController::class, 'create'])
    ->name('appoint');

// Route POST : traite la soumission du formulaire
Route::post('/appointments', [AppointmentController::class, 'store'])
    ->name('appointments.store');




require __DIR__.'/auth.php';
