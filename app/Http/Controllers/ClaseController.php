<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clase;

class ClaseController extends Controller
{
    public function index(){
        $listaClase = Clase::all();
        $message = "Clases registradas";
        return view('Clase.list', compact('listaClase', 'message'));
    }

    public function create(){
        return view('Clase.create');
    }

    public function store(Request $request){
        $codclase = $request->input('c_codigo');
        $nombre = $request->input('c_nombre');
        $credito = $request->input('c_creditos');
        $clase = new Clase();
        $clase->id = $codclase;
        $clase->nombre = $nombre;
        $clase->credito = $credito;
        $affected = $clase->save();
        if($affected > 0 ){
            $message = "Clase registrada correctamente";
        }else{
            $message = "Ha ocurrido un error";
        }
        return view('Clase.notification', compact('message'));
    }
    public function show($id){
        $clase = Clase::find($id);
        return view('Clase.edit', compact('clase'));
    }
    public function update(Request $request, $id){
        $nombre = $request->input('c_nombre');
        $credito = $request->input('c_creditos');
        $clase = Clase::find($id);
        $clase->nombre = $nombre;
        $clase->credito = $credito;
        $affected = $clase->save(); 
        if($affected > 0){
            $message = "Registro actualizado correctamente";
        }elseif($affected == 0){
            $message = "No han ocurrido cambios";
        }
        else{
            $message = "Ha ocurrido un error al actulizar el registro";
        }
        return view('Clase.notification', compact('message'));
    }
    public function destroy($id){
        $affected = Clase::find($id)->delete();
        if($affected > 0 ){
            $message = "Registro eliminado correctamente";
        }else{
            $message = "Ha ocurrido un error";
        }
        return view('Clase.notification', compact('message'));
    }

    public function viewRelations($id){
        $relation = Clase::with(['profesors', 'aulas'])->where('id', $id)->get()[0];
        $message = "";
        //print_r($relation->nombre);
        return view('Clase.view_relations', compact('relation', 'message'));
    }
    
}
