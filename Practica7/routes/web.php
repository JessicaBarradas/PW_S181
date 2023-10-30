<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaControlador;

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

Route::get('/',[BibliotecaControlador::class,'metodoInicio'])->name('ApodoPrincipal');
Route::get('/Registro',[BibliotecaControlador::class,'metodoFormulario'])->name('ApodoForms');
Route::post('/GuardarLibro',[BibliotecaControlador::class,'GuardarLibro'])->name('Guardar');


/*Route::view('/','welcome');
Route::view('/Registro','Registro');*/
