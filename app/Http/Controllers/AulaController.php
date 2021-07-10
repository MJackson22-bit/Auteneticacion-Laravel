<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index(){
        $listaAula = Aula::all();
        $message = "Aulas registradas";
        return view('Aula.list', compact('listaAula', 'message'));
    }
    public function store(Request $request){
        $id = $request->input('a_id');
        $nombre = $request->input('a_nombre');
        $ubicacion = $request->input('a_ubicacion');
        $aula = new Aula();
        $aula->id = $id;
        $aula->nombre = $nombre;
        $aula->ubicacion = $ubicacion;
        $affected = $aula->save();
        if($affected > 0 ){
            $message = "Aula registrada correctamente";
        }else{
            $message = "Ha ocurrido un error";
        }
        return view('Aula.notification', compact('message'));
    }
    public function create(){
        return view('Aula.create');
    }
    public function show($id){
        $aula = Aula::find($id);
        return view('Aula.edit', compact('aula'));
    }


    public function update(Request $request, $id){
        $nombre = $request->input('a_nombre');
        $ubicacion = $request->input('a_ubicacion');
        $aula = Aula::find($id);
        $aula->nombre = $nombre;
        $aula->ubicacion = $ubicacion;
        $affected = $aula->save(); 
        if($affected > 0){
            $message = "Registro actualizado correctamente";
        }elseif($affected == 0){
            $message = "No han ocurrido cambios";
        }
        else{
            $message = "Ha ocurrido un error al actulizar el registro";
        }
        return view('Aula.notification', compact('message'));
    }

    public function destroy($id){
        $affected = Aula::find($id)->delete();
        if($affected > 0){
            $message = "Registro eliminado correctamente";
        }else{
            $message = "Ha ocurrido un error";
        }
        return view('Aula.notification', compact('message'));
    }

    
    public function viewRelations($id){
        $relation = Aula::with(['clases', 'profesors'])->where('id', $id)->get()[0];
        $message = "";
        //print_r($relation->nombre);
        return view('Aula.view_relations', compact('relation', 'message'));
    }
}
