<!DOCTYPE html>
@extends('layouts.app')


@section('contenido')
<body>
    <div class="container" style="margin-top:10px;">
        <h1 align="center"><strong>Administración de la Base de Datos de la Universidad</strong></h1>
    </div>
    <div class="container" align="center">
        <div class="row">
            <div class="col-sm">

                <div class="card-header" id="headingOne" align="center">
                    <h5 class="mb-0">
                        <a class="btn btn-primary" href="/aulas" align="center">
                            <span class="oi oi-globe"></span>
                            <h6><strong><i class="bi bi-collection">Administración de Aulas</i></strong></h6>

                        </a>
                    </h5>
                </div>
            </div>
            <!--<div class="col-sm">
                <div class="card-header" id="headingTwo" align="center">
                    <h5 class="mb-0">
                        <a href="/clases" class="btn btn-primary" align="center">
                            <h6><strong><i class="bi bi-collection">Administración de Clases</i></strong></h6>
                        </a>
                    </h5>
                </div>
            </div>-->
            <div class="col-sm">
                <div class="card-header" id="headingThree" align="center">
                    <h5 class="mb-0">
                        <a class="btn btn-primary " href="/profesors" align="center">
                            <h6><strong><i class="bi bi-collection">Administración de Profesores</i></strong></h6>
                        </a>
                    </h5>
                </div>
            </div>
            <!--<div class="col-sm">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <a class="btn btn-primary " href="/impartes" align="center">
                            <h6><strong><i class="bi bi-collection">Relacionar Registros</i></strong></h6>
                        </a>
                    </h5>
                </div>
            </div>-->
        </div>
    </div>
    <div class="container">
        @yield('contenido')
    </div>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
@endsection