<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InicioController;

// Laboratorio
Route::get('/', [InicioController::class, 'index'])->name('index');
Route::get('/about', [InicioController::class, 'about'])->name('about');
Route::get('/estudios', [InicioController::class, 'estudios'])->name('estudios');
Route::get('/promociones', [InicioController::class, 'promociones'])->name('promociones');
Route::get('/pacientes', [InicioController::class, 'pacientes'])->name('pacientes');
Route::get('/contacto', [InicioController::class, 'contacto'])->name('contacto');

// Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
// Rutas Medicos
Route::get('/medico', [App\Http\Controllers\MedicoController::class, 'index']);
Route::get('/medico/create', [App\Http\Controllers\MedicoController::class, 'create']);

