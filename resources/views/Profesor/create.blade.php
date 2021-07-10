<!DOCTYPE html>
@extends('index')

@section('contenido')
<div class="container">
    <div class="card-body">
        <div class="container" style="border: 1px solid; border-color: green; padding: 10px; border-radius: 70px 20px;">
            <h1 align="center">Profesores</h1>
            <form action="{{ url('profesors') }}" method="post" class="col-md-6" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" class="form-control col-md-6" name="p_id" placeholder="Identificador del profesor" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="p_nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control col-md-6" name="p_apellido" placeholder="Apellido" required>
                </div>
                <div class="form-group">
                    <label for="p_titulo">Elija el título del profesor</label>
                    <select id="p_titulo" name="p_titulo" class="custom-select" required>
                        <option selected value="LIC">Licenciado</option>
                        <option value="ING">Ingeniero</option>
                        <option value="MSC">Máster</option>
                        <option value="DOC">Doctor</option>
                      </select>
                </div>
                <button type="submit" name="btEnviar" value="btPersonaje" class="btn btn-primary">Enviar</button>
            </form>
            <hr/>
            <hr/>
            <a class="btn btn-primary" href="/profesors" role="button">Ver registro de Profesores</a>
        </div>
    </div>
</div>
@endsection