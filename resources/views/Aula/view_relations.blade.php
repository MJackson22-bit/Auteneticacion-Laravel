<!DOCTYPE html>
@extends('layouts.app')

@section('contenido')

    <div class="container" style="margin-top:45px;">
        <h2 align="center"><strong>{{ $message }}</strong></h2>
    </div>
    <br />
   

    <div class="p-3 mb-2 bg-primary text-white" align="center">
        <h2 class="mb-0">
            Aula en que imparten
        </h2>
        <hr/>
        <div class="row">
            <div class="col-sm" align="center" style="margin-top: 10px;">
                <b>Identificador:</b> {{ $relation->id }} <br />

                Nombre: {{ $relation->nombre }} <br />

                Ubicación: {{ $relation->ubicacion }} <br />
            </div>
        </div>

        <hr/>
        <div class="container" style="margin-top: 10px;">
            <div class="row">

                <div class="col-sm">
                    <h2 class="mb-0">
                        Clases que imparten
                    </h2>
                </div>
                <div class="col-sm">
                    <h2 class="mb-0">
                        Profesores que imparten
                    </h2>
                </div>

            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-sm" style="margin-top: 10px;">
                @foreach ($relation->clases as $data)
                    <b>Identificador:</b> {{ $data->id }} <br />

                    Nombre: {{ $data->nombre }} <br />

                    Créditos: {{ $data->credito }} <br /> <br />
                    <hr />

                @endforeach
            </div>
            <div class="col-sm" style="margin-top: 10px;">
                @foreach ($relation->profesors as $data)
                    <b>Identificador:</b> {{ $data->id }} <br />

                    Nombre: {{ $data->nombre }} <br />

                    Apellido: {{ $data->apellido }} <br />
                    
                    Título: {{ $data->título }}<br />
                    <hr />
                @endforeach
            </div>
        </div>
    </div>

    <br />
@endsection
