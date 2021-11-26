<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get("alumno/mostrar", [AlumnoController::class, 'mostrar']);

Route::delete("alumno/borrar/{id}", [AlumnoController::class, 'borrar']);

// Mostrar en el formulario
Route::get("alumno/modificar/{id}", [AlumnoController::class, 'modificar']);
// Insertrar en bbdd
Route::put("alumno/actualizar_alu", [AlumnoController::class, 'actualizar']);

// Mostrar en el formulario
Route::get("alumno/crear", [AlumnoController::class, 'crear']);
// Insertrar en bbdd
Route::put("alumno/crear_alu", [AlumnoController::class, 'generar']);

Route::get("alumno/",[AlumnoController::class, 'login']);

Route::put("alumno/login_post",[AlumnoController::class, 'login_post' ]);

Route::get("alumno/logout",[AlumnoController::class, 'logout']);