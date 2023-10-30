<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormLibro;

class BibliotecaControlador extends Controller
{
    public function metodoInicio(){
        return view ('welcome');
    }    
    public function metodoFormulario(){
        return view ('Registro');
    }
    public function GuardarLibro(validadorFormLibro $req){
        /*$valited =$req->valite([
            'txtISBN' => 'required|numeric|digits_between:13,20',
            'txtAutor'=>"required",
            'txtPaginas'=>"required|numeric",
            'txtEditorial'=>"required",
            'txtEmail'=>"required"
        ]);*/
        $Libro=$req->input("txtTitulo");
        return redirect("/Registro")->with("Confirmacion","El libro ".$Libro." se ha agregado correctamente");
    }
}
