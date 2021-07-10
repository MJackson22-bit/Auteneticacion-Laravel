<!DOCTYPE html>
@extends('index')

@section('contenido')
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <div class="container" style="margin-top:45px;">
        <h2 align="center"><strong>{{ $message }}</strong></h2>
    </div>
    <br />
    <div class="container" style="margin: 8px;">
        <a href="aulas/create" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Agregar una nueva aula
        </a>
    </div>
    @if (count($listaAula) > 0)
        <div class="container">
            <table class="table  table-dark">

                <tr>
                    <th scope="col">
                        <h3>Información</h3>
                    </th>
                    <th scope="col">
                        <h3 align="center">Acciones</h3>
                    </th>

                </tr>

                @foreach ($listaAula as $data)

                    <tr>


                        <td> <b>Identificador del Aula:</b> {{ $data->id }} <br />

                            Nombre: {{ $data->nombre }} <br />

                            Ubicación: {{ $data->ubicacion }} <br /> <br />

                        </td>
                        <td align="center">
                            <a href="{{ asset('aulas/' . $data->id) }}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>
                            <a class="btn btn-success" href="{{ asset('aulas/delete/' . $data->id) }}">
                                <span class="glyphicon glyphicon-remove-sign"></span> Eliminar
                            </a>
                            <a class="btn btn-danger" href="{{ asset('aulas/relation/' . $data->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                    <path
                                        d="M5.22 14.78a.75.75 0 001.06-1.06L4.56 12h8.69a.75.75 0 000-1.5H4.56l1.72-1.72a.75.75 0 00-1.06-1.06l-3 3a.75.75 0 000 1.06l3 3zm5.56-6.5a.75.75 0 11-1.06-1.06l1.72-1.72H2.75a.75.75 0 010-1.5h8.69L9.72 2.28a.75.75 0 011.06-1.06l3 3a.75.75 0 010 1.06l-3 3z">
                                    </path>
                                </svg>
                                Ver Relación
                            </a>

                        </td>

                    </tr>

                @endforeach

            </table>

        </div>
    @endif
    <br />
@endsection
