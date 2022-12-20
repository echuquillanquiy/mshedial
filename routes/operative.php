<?php

use App\Http\Controllers\Operativo\MedicalController;
use App\Http\Controllers\Operativo\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('order', [OrderController::class, 'index'])->name('generar.orden');



Route::get('medical', [MedicalController::class, 'index'])->name('atencion.medica');
Route::get('medicals/{medical}/edit', [MedicalController::class, 'edit'])->name('historia.medica');
