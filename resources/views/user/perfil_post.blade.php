@extends('layout')
@section('title', 'Publicaciones')
@section('contenido')
@include('user.cabecera')

<div class="container  bg-white shadow shadow-sm fade-out" id="content">

    <div class="row justify-content-center">
        <div class="col-12 text-center  mt-5">
            <h1 class="titulo-post" >{{$publicacion->titulo}}</h1>
            <span class="text-sub">Publicado por: <u> {{$publicacion->autor}} <i class="fa fa-heart"></i> </u> </span>
        </div>

        <div class="col-12 text-center my-3 p-0 mt-1">
            <h5>Reacciones: </h5>
            <div class="btn-group">
                <button class="btn btn-danger d-block btn-sm">
                    <i class="fa fa-heart text-white"></i>
                    80
                </button>
                <button class="btn btn-primary d-block btn-sm">
                    <i class="fa fa-thumbs-up"></i>
                    30
                </button>
                <button class="btn btn-secondary d-block btn-sm">
                    <i class="fa-solid fa-thumbs-down"></i>
                    20
                </button>
            </div>
        </div>

        <div class="col-10">
            <p>{{$publicacion->introduccion}}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center m-3">
            <img src="{{Storage::url($publicacion->portada)}}" class="img-fluid" alt="">
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-8">
            {!!$publicacion->cuerpo!!}
        </div>
    </div>

</div>

<div class="container mt-4 bg-white shadow p-4">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolores ut veniam consequatur? Mollitia, tempore aspernatur libero quis dolore error dolorum minus modi nulla dolorem velit praesentium architecto ut ipsam.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, consectetur fugit repudiandae eum culpa aliquam porro sapiente beatae et ipsum sed corporis nisi illum facere, cumque quisquam adipisci, ullam odit.
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam veniam aspernatur odit explicabo laudantium libero facilis! In, saepe autem quas aliquid asperiores cumque pariatur? Possimus adipisci minus quis fuga.
</div>
    
@endsection
