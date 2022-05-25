<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CapturaCarta;

class CartaController extends Controller
{
    public function store(Request $request) {
        //return "hola, soy omelo chino";
        $respuesta = array();
        $respuesta['exito'] = false;

        $nuevaCaptura= new CapturaCarta();
        

        $nuevaCaptura->nombre =
            $request->input('Nombre');
        $nuevaCaptura->apellido =
            $request->input('Apellido');
        $nuevaCaptura->genero =
            $request->input('Genero');
        $nuevaCaptura->nacimiento =
            $request->input('Nacimiento');    
        $nuevaCaptura->pais =
            $request->input('Pais'); 
        $nuevaCaptura->ciudad =
            $request->input('Ciudad');
        $nuevaCaptura->signo =
            $request->input('Signo');
        $nuevaCaptura->id =
            $request->input('Id');
        

        if($nuevaCaptura->save()){
            
            $respuesta['exito'] = true;
        }
        return $respuesta;
    }
    public function index(){
        $unidades = CapturaCarta::select('id','Nombre','Apellido','Genero','Nacimiento','Pais','Ciudad','Signo')->get();
        return $unidades;
    }
}


