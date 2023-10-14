<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
 
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/FORM', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/RECUERDOS', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/FORMS', function () {
    return view('Formulario');
});
Route::get('/RECUERDOS', function () {
    return view('Recuerdos');
});

Route::view('/', 'welcome')-> name('apodoInicio');
Route::view('/FORM', 'formulario')->name('apodoFormulario');
Route::view('/RECUERDOS', 'recuerdos')->name('apodoRecuerdos');*/
