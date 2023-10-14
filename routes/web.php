<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [EstudianteController::class, "index"])->name('estudiantes.index');

Route::get('/estudiantes/create', [EstudianteController::class, "create"])->name('estudiantes.create');

Route::post('/estudiantes/store', [EstudianteController::class, "store"])->name('estudiantes.store');

Route::get('/estudiantes/delete/{id_estudiante}', [EstudianteController::class, "delete"])->name('estudiantes.delete');


