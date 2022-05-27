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
            //$respuesta['exito'] = true;
            return redirect()->route('api.capturas.index')->
            with('success', 'Carta agregada.');
        }

         return redirect()->route('api.capturas.index')->
        with('error', 'Error al añadir Carta.');
    }
    public function index(){
        //$unidades = CapturaCarta::select('id','Nombre','Apellido','Genero','Nacimiento','Pais','Ciudad','Signo')->get();
        $capturas = CapturaCarta::all();
        $argumentos = array();
        $argumentos['capturas'] = $capturas;
        return view('capturas.index', $argumentos);
    }

    public function create(){
        return view ('capturas.create');
    }

    public function destroy($id){
        $carta = CapturaCarta::find($id);

        if($carta){
            if($carta -> delete()){
                return redirect() -> route('api.capturas.index')->with('success', 'Carta eliminada');
            }
            return redirect()->route('api.capturas.index')->with('error', 'No se eliminó la Carta');
        }
        return redirect()->route('api.capturas.index')->with('error', 'No se eliminó la Carta');
    }

}


