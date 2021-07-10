<!DOCTYPE html>
@extends('index')
@section('contenido')
<div class="container">
    <div class="card-body">
        <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
            <strong><h1 align="center">Actualización de datos de la clase</h1></strong>
            <form action="{{ asset('clases/edit/' . $clase->id) }}" method="post" class="col-md-6" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="c_codigo"><h5><strong>Codigo de la clase (No Editable)</strong></h5></label>
                    <input type="text" id="c_codigo" class="form-control col-md-6" name="c_codigo" readonly value="{{$clase->id}}"  required>
                </div>
                <br/>
                <div class="form-group">
                    <label for="c_nombre"><h5><strong>Nombre:</strong></h5></label>
                    <input type="text" id="c_nombre" class="form-control" name="c_nombre" value="{{$clase->nombre}}"  required>
                </div>
                <br/>
                <div class="form-group">
                    <label for="c_credito"><h5><strong>Número de créditos:</strong></h5></label>
                    <input type="number" id="c_credito" class="form-control col-md-3" name="c_creditos" value="{{$clase->credito}}"  min="1" max="4" required>
                </div>
                <br/>
                <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Actualizar</button>
            </form>
            <hr/>
            <hr/>
            <a class="btn btn-primary" href="/clases" role="button">Ver registro de las clases</a>
        </div>
    </div>
</div>
@endsection