@extends('layout')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-3 p-4 bg-white">
            <a href="{{route('agregar.usuarios')}}">Agregar usuarios</a>
        </div>
    </div>
</div>
@endsection