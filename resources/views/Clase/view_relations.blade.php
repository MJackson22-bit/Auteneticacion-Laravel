<!DOCTYPE html>
@extends('layouts.app')

@section('contenido')

    <div class="container" style="margin-top:45px;">
        <h2 align="center"><strong>{{ $message }}</strong></h2>
    </div>
    <br />
   

    <div class="p-3 mb-2 bg-primary text-white" align="center">
        <h2 class="mb-0">
            Clase impartida
        </h2>
    <hr />
        <div class="row">
            <div class="col-sm" style="margin-top: 10px;">
                <b>Identificador:</b> {{ $relation->id }} <br />

                Nombre: {{ $relation->nombre }} <br />

                Apellido: {{ $relation->credito }} <br />
            </div>
        </div>
        <hr />

        <div class="container" style="margin-top: 20px;">
            <div class="row">

                <div class="col-sm">
                    <h2 class="mb-0">
                        Aula en que la imparten
                    </h2>
                </div>
                <div class="col-sm">
                    <h2 class="mb-0">
                        Profesores que la imparten
                    </h2>
                </div>

            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-sm" style="margin-top: 30px;">
                @foreach ($relation->aulas as $data)
                    <b>Identificador:</b> {{ $data->id }} <br />

                    Nombre: {{ $data->nombre }} <br />

                    Ubicación: {{ $data->ubicacion }} <br /> <br />
                    <hr />

                @endforeach
            </div>
            <div class="col-sm" style="margin-top: 30px;">
                @foreach ($relation->profesors as $data)
                    <b>Identificador:</b> {{ $data->id }} <br />

                    Nombre: {{ $data->nombre }} <br />

                    Apellido: {{ $data->apellido }} <br />
                    Título: {{ $data->titulo }} <br />
                    <hr />
                @endforeach
            </div>
        </div>
    </div>

    <br />
@endsection
