<!DOCTYPE html>
@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="card-body">
        <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
            <strong><h1 align="center">Actualización de datos del Aula</h1></strong>
            <hr/>
            <hr/>
            <form action="{{ asset('aulas/edit/' . $aula->id) }}" method="post" class="col-md-6" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="a_id"><h5><strong>Identificador del aula (No editable):</strong></h5></label>
                    <input type="text" class="form-control col-md-4" id="a_id" name="a_id" value="{{$aula->id}}" readonly>
                </div>
                <br/>
                <div class="form-group">
                    <label for="a_nombre"><h5><strong>Nombre:</strong></h5></label>
                    <input type="text" class="form-control col-md-6" id="a_nombre" name="a_nombre" value="{{$aula->nombre}}" required>
                </div>
                <br/>
                <div class="form-group">
                    <label for="a_ubicacion"><h5><strong>Ubicación:</strong></h5></label>
                    <input type="text" id="a_ubicacion" class="form-control col-md-6" name="a_ubicacion" value="{{$aula->ubicacion}}" required>
                </div>
                <br/>
                <button type="submit" name="btActualizar" value="btActualizar" class="btn btn-primary">Actualizar</button>
            </form>
            <hr/>
            <hr/>
            <a class="btn btn-primary" href="/aulas" role="button">Regresar</a>
        </div>
    </div>
</div>
@endsection