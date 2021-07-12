<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::check()){
            
            if(Auth::user()->can("create", Aula::class)){
                return view('Aula.create');
                
            }
        }
        $message = "Acción restringida - Ingresar Aula: Solo usuarios con el rol 2";
        return view('Aula.notification', compact('message'));
    }
    public function show($id){
        $aula = Aula::find($id);
        return view('Aula.edit', compact('aula'));
    }

    public function update(Request $request, $id){
        if(Auth::check()){
            $aula = Aula::find($id);
            if(Auth::user()->can('update', $aula)){
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
        }
        $message = "Acción restringida - Actualizar Aula: Solo usuarios con el rol 2";
        return view('Aula.notification', compact('message'));
    }

    public function destroy($id){
        if(Auth::check()){
            $aula = Aula::find($id);
            if(Auth::user()->can('delete', $aula)){
                $affected = Aula::find($id)->delete();
                if($affected > 0){
                    $message = "Registro eliminado correctamente";
                }else{
                    $message = "Ha ocurrido un error";
                }
                return view('Aula.notification', compact('message'));
            }
        }
        $message = "Acción restringida - Eliminar Aula: Solo usuarios con el rol 2";
        return view('Aula.notification', compact('message'));
    }

    public function viewRelations($id){
        $relation = Aula::with(['clases', 'profesors'])->where('id', $id)->get()[0];
        $message = "";
        //print_r($relation->nombre);
        return view('Aula.view_relations', compact('relation', 'message'));
    }
}
