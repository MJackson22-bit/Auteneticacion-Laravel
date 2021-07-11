<!DOCTYPE html>
@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="card-body">
        <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
            <strong><h1 align="center">Aulas</h1></strong>
            <form action="{{ url('aulas') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" class="form-control col-md-6" name="a_id" placeholder="Identificador del aula"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="a_nombre" placeholder="Nombre del aula" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control col-md-3" name="a_ubicacion" placeholder="Ubicación" required>
                </div>
                <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
            </form>
            <hr/>
            <hr/>
            <a class="btn btn-primary" href="/aulas" role="button">Ver registro de las aulas</a>
        </div>
    </div>
</div>
@endsection