<?php

namespace App\Http\Controllers;
use App\Models\Clase;
use App\Models\Aula;
use App\Models\Profesor;
use App\Models\Imparte;
use \Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Exception;

class ImparteController extends Controller
{
    public function index(){
        $listaAula = Aula::all();
        $listaClase = Clase::all();
        $listaProfesor = Profesor::all();
        return view('Imparte.create', compact('listaAula', 'listaClase', 'listaProfesor'));
    }
    public function store(Request $request){
        try {
            $id_aula = $request->input('id_aulas');
            $id_profesor = $request->input('id_profesor');
            $id_clase = $request->input('id_clase');
            $imparte = new Imparte();
            $imparte->c_codclase = $id_clase;
            $imparte->p_idprofesor = $id_profesor;
            $imparte->a_idaula = $id_aula;
            $affected = $imparte->save();
            if($affected > 0){
                $message = "Registro Guardado exitasomente";
                return view('Imparte.notification', compact('message'));
            }
        } catch (Exception $e) {
            $message = $e->getMessage();
            return view('Imparte.notification', compact('message'));
        }
    }
}