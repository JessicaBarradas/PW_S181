<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/V1', function () {
    return view('Vista1');
});
/*Route::get('/RECUERDOS', function () {
    return view('Recuerdos');
});*/

/*
Route::view('/', 'welcome')-> name('apodoInicio');
Route::view('/FORM', 'formulario')->name('apodoFormulario');
Route::view('/RECUERDOS', 'recuerdos')->name('apodoRecuerdos');*/
