<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use Illuminate\Support\Facades\Gate;

class ProfesorController extends Controller
{
    public function index()
    {
        $listaProfesor = Profesor::all();
        $message = "Profesores registrados";

        return view('Profesor.list', compact('listaProfesor', 'message'));
    }

    public function create()
    {
        if (Gate::allows('create-profesor')) {
            return view('Profesor.create');
        }
        $message = "Acción restringida - Ingresar Profesor: Solo usuarios con el rol 1";
        return view('Profesor.notification', compact('message'));
    }
    public function store(Request $request)
    {
        $id = $request->input("p_id");
        $nombre = $request->input('p_nombre');
        $apellido = $request->input('p_apellido');
        $title = $request->input('p_titulo');
        $profesor = new Profesor();
        $profesor->id = $id;
        $profesor->nombre = $nombre;
        $profesor->apellido = $apellido;
        $profesor->titulo = $title;
        $affected = $profesor->save();
        if ($affected > 0) {
            $message = "Profesor registrado correctamente";
        } else {
            $message = "Ha ocurrido un error";
        }
        return view('Profesor.notification', compact('message'));
    }

    public function show($id)
    {
        $profesor = Profesor::find($id);
        return view('Profesor.edit', compact('profesor'));
    }
    public function destroy($id)
    {
        if (Gate::allows('create-profesor')) {
            $affected = Profesor::find($id)->delete();
            if ($affected > 0) {
                $message = "Registro eliminado correctamente";
            } else {
                $message = "Ha ocurrido un error";
            }
            return view('Profesor.notification', compact('message'));
        }
        $message = "Acción restringida - Eliminar Profesor: Solo usuarios con el rol 1";
        return view('Profesor.notification', compact('message'));
    }


    public function update(Request $request, $id)
    {
        if (Gate::allows('create-profesor')) {
            $nombre = $request->input('p_nombre');
            $apellido = $request->input('p_apellido');
            $titulo = $request->input('p_titulo');
            $profesor = Profesor::find($id);
            $profesor->nombre = $nombre;
            $profesor->apellido = $apellido;
            $profesor->titulo = $titulo;
            $affected = $profesor->save();
            if ($affected > 0) {
                $message = "Registro actualizado correctamente";
            } elseif ($affected == 0) {
                $message = "No han ocurrido cambios";
            } else {
                $message = "Ha ocurrido un error al actulizar el registro";
            }
            return view('Profesor.notification', compact('message'));
        }
        $message = "Acción restringida - Actualizar Profesor: Solo usuarios con el rol 1";
        return view('Profesor.notification', compact('message'));
    }

    public function viewRelations($id)
    {
        $relation = Profesor::with(['clases', 'aulas'])->where('id', $id)->get()[0];
        $message = "";
        //print_r($relation->nombre);
        return view('Profesor.view_relations', compact('relation', 'message'));
    }
}
