<!DOCTYPE html>
@extends('index')
@section('contenido')
<div class="container">
    <div class="alert alert-success" role="alert">
        <h4 align="center" class="alert-heading">{{$message}}</h4>
    </div>
    <a href="/profesors" align="center" class="btn btn-primary">Ir Atrás</a>
</div>
@endsection 