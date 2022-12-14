<?php

use App\Http\Controllers\Operativo\MedicalController;
use App\Http\Controllers\Operativo\NurseController;
use App\Http\Controllers\Operativo\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('order', [OrderController::class, 'index'])->name('generar.orden');



Route::get('medical', [MedicalController::class, 'index'])->name('atencion.medica');
Route::get('medicals/{medical}/edit', [MedicalController::class, 'edit'])->name('historia.medica');

Route::get('nurse', [NurseController::class, 'index'])->name('nurse.index');
Route::get('nurses/{nurse}/edit', [NurseController::class, 'edit'])->name('nurse.edit');
