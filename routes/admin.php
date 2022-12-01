<?php

use App\Http\Controllers\Admin\Asignar;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('patients', [PatientController::class, 'index'])->name('pacientes');
Route::get('modules', [ModuleController::class, 'index'])->name('modulos');
Route::get('sessions', [SessionController::class, 'index'])->name('turnos');

Route::get('users', [UserController::class, 'index'])->name('usuarios');
Route::get('roles', [RoleController::class, 'index'])->name('roles');
Route::get('permissions', [PermissionController::class, 'index'])->name('permisos');
Route::get('asignar', [Asignar::class, 'index'])->name('asignar.permisos');
