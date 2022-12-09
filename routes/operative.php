<?php

use App\Http\Controllers\Operativo\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('order', [OrderController::class, 'index'])->name('generar.orden');
