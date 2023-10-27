<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JaddeController;
use App\Http\Controllers\JazminController;
use App\Http\Controllers\JesusController;
use App\Http\Controllers\JordanController;
use App\Http\Controllers\MargaritaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\ClaseController;




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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('jadde ', JaddeController::class);

Route::resource('jazmin', JazminController::class);

Route::resource('jesus', JesusController::class);


Route::resource('jordan', JordanController::class);


Route::resource('mar', MargaritaController::class);

Route::resource('alumnos', AlumnoController::class);

Route::resource('crud', CrudController::class);

Route::resource('profesores', ProfesoresController::class);

Route::resource('formulario', FormularioController::class);

Route::resource('listado', ListadoController::class);






Route::get('formularioclase', [ClaseController::class, 'formulario'])->name('clase.formulario');
Route::post('formularioclase', [ClaseController::class, 'store'])->name('formularioclase.store');













































