<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\lectorController;
use App\Http\Controllers\libroController;
use App\Http\Controllers\prestamoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//RUTAS DE LIBRO
Route::get('/libro', [libroController::class, 'index']);
Route::get('/libro/{id}', [libroController::class, 'buscar_libro']);
Route::post('/libro', [libroController::class, 'crear_libro']);
Route::post('/libro', [libroController::class, 'Update_libro']);

//RUTAS LECTOR

Route::get('/lector', [lectorController::class, 'index']);
Route::get('/lector/{$id}', [lectorController::class, 'buscar_lector']);
Route::post('/lector', [lectorController::class, 'crear_lector']);
Route::post('/lector', [lectorController::class, 'Update_lector']);

//RUTAS PARA PRESTAMO

Route::get('/prestamo', [prestamoController::class, 'index']);
Route::get('/lector/{$id}', [prestamoController::class, 'buscar_prestamo']);
Route::post('/prestamo', [lectorController::class, 'crear_prestamo']);
Route::post('/prestamo', [lectorController::class, 'Update_prestamo']);







