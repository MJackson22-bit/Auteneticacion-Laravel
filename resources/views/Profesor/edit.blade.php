<!DOCTYPE html>
@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="card-body">
        <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
            <strong><h1 align="center">Actualización de datos del profesor</h1></strong>
            <br/>
            <form  action="{{ asset('profesors/edit/' . $profesor->id) }}" method="post" class="col-md-6" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="p_id"><h5><strong>Identificador del Profesor (No Editable):</strong></h5></label>
                    <input type="text" id="p_id" class="form-control col-md-6" name="p_id" readonly value="{{$profesor->id}}" maxlength="10" required>
                </div>
                <br/>
                <div class="form-group">
                    <label for="p_nombre"><h5><strong>Nombre:</strong></h5></label>
                    <input type="text" id="p_nombre" class="form-control" name="p_nombre" value="{{$profesor->nombre}}" required>
                </div>
                <br/>
                <div class="form-group">
                    <label for="p_apellido"><h5><strong>Apellido:</strong></h5></label>
                    <input type="text" id="p_apellido" class="form-control col-md-6" name="p_apellido" value="{{$profesor->apellido}}" maxlength="10" required>
                </div>
                <br/>
                <div class="form-group">
                    <label for="p_titulo"><h5><strong>Elija el título del profesor</strong></h5></label>
                    
                    <select id="p_titulo"  name="p_titulo" class="custom-select" required>
                        @if ($profesor->titulo == "ING")
                        <option  value="LIC">Licenciado</option>
                        <option selected value="ING">Ingeniero</option>
                        <option value="MSC">Máster</option>
                        <option value="DOC">Doctor</option>
                        @elseif($profesor->titulo == "LIC")
                        <option selected value="LIC">Licenciado</option>
                        <option value="ING">Ingeniero</option>
                        <option value="MSC">Máster</option>
                        <option value="DOC">Doctor</option>
                        @elseif($profesor->titulo == "MSC")
                        <option  value="LIC">Licenciado</option>
                        <option value="ING">Ingeniero</option>
                        <option selected value="MSC">Máster</option>
                        <option value="DOC">Doctor</option>
                        @else
                        <option value="LIC">Licenciado</option>
                        <option value="ING">Ingeniero</option>
                        <option value="MSC">Máster</option>
                        <option selected value="DOC">Doctor</option>
                      @endif
                      </select>
                      
                </div>
                <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Actualizar</button>
            </form>
            <hr/>
            <hr/>
            <a class="btn btn-primary" href="/profesors" role="button">Ver registro de Profesores</a>
        </div>
    </div>
</div>
@endsection