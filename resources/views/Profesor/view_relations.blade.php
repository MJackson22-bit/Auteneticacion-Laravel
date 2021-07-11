<!DOCTYPE html>
@extends('layouts.app')

@section('contenido')

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <div class="container" style="margin-top:45px;">
        <h2 align="center"><strong>{{ $message }}</strong></h2>
    </div>
    <br />
    
    

    <div class="p-3 mb-2 bg-primary text-white" align="center">
        <h2 class="mb-0">
            Profesor que imparte
        </h2>
        <hr />
        <div class="row">
            <div class="col-sm"  style="margin-top: 10px; ">
                <strong>Identificador:</strong> {{ $relation->id }} <br />

                Nombre: {{ $relation->nombre }} <br />

                Apellido: {{ $relation->apellido }} <br />
                Título: {{ $relation->titulo }} <br />
            </div>
        </div>


        <hr/>
        <div class="container" style="margin-top: 10px;">
            <div class="row" >
                <div class="col-sm" >
                    <h2 class="mb-0">
                        Aulas en las que imparten
                    </h2>
                </div>
                
                <div class="col-sm" >
                    <h2 class="mb-0">
                        Clases que imparten
                    </h2>
                </div>

            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-sm" style="margin-top: 10px;">
                @foreach ($relation->aulas as $data)
                <strong>Identificador:</strong>{{ $data->id }} <br />

                    Nombre: {{ $data->nombre }} <br />

                    Ubicación: {{ $data->ubicacion }} <br /> <br />
                    <hr />

                @endforeach
            </div>
            <div class="col-sm"  style="margin-top: 10px;">
                @foreach ($relation->clases as $data)
                <strong>Identificador:</strong> {{ $data->id }} <br />

                    Nombre: {{ $data->nombre }} <br />

                    Créditos: {{ $data->credito }} <br /><br />
                    <hr />
                @endforeach
            </div>
        </div>
    </div>

    <br />
@endsection
