<!DOCTYPE html>
@extends('index')
@section('contenido')
    <div class="container">
        <div class="card-body">
            <div class="container" align="center">
                <h1 align="center"><strong>Relacionar Registros</strong></h1>
                <form action="{{ url('impartes') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col">
                            <label for="id_profesor"><strong>Id Profesor</strong></label>
                            <select class="form-control" id="id_profesor" name="id_profesor" required>
                                @if (count($listaProfesor) > 0)
                                    @foreach ($listaProfesor as $profesor)
                                        <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col">
                            <label for="id_aulas"><strong>Id Aula</strong></label>
                            <select class="form-control" id="id_aulas" name="id_aulas" required>
                                @if (count($listaAula) > 0)
                                    @foreach ($listaAula as $aula)
                                        <option value="{{ $aula->id }}">{{ $aula->nombre }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col">
                            <label for="id_clases"><strong>Id Clase</strong></label>
                            <select class="form-control" id="id_clase" name="id_clase" required>
                                @if (count($listaClase) > 0)
                                    @foreach ($listaClase as $clase)
                                        <option value="{{ $clase->id }}">{{ $clase->nombre }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
                </form>
                <hr />
                <hr />
            </div>
        </div>
    </div>
@endsection
