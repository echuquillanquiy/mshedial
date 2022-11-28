<?php

use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('patients', [PatientController::class, 'index'])->name('pacientes');

Route::get('modules', [ModuleController::class, 'index'])->name('modulos');
