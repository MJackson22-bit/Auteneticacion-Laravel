<!DOCTYPE html>
@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="card-body">
        <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
            <strong><h1 align="center">Clase</h1></strong>
            <form action="{{ url('clases') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" class="form-control col-md-6" name="c_codigo" placeholder="Código de la clase"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="c_nombre" placeholder="Nombre de la clase" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control col-md-5" name="c_creditos" placeholder="Número de Créditos" min="1" max="4" required>
                </div>
                <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
            </form>
            <hr/>
            <hr/>
            <a class="btn btn-primary" href="/clases" role="button">Ver registro de las clases</a>
        </div>
    </div>
</div>
@endsection