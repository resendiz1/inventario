@extends('layout')
@section('title', 'Publicaciones')
@section('contenido')
@include('user.cabecera')

<div class="container-fluid mx-2 bg-white shadow shadow-sm">

    <div class="row justify-content-center">
        <div class="col-10 text-center p-2">
            <h1 class="titulo-post" >{{$publicacion->titulo}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            {!!$publicacion->cuerpo!!}
            {{$publicacion->cuerpo}}

        </div>
    </div>

</div>
    
@endsection
