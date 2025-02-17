@php
    use Carbon\Carbon;
@endphp
@extends('layout')
@section('title', 'Publicaciones')
@section('contenido')
@include('user.cabecera')

<div class="container  bg-white shadow shadow-sm fade-out" id="content">

    <div class="row justify-content-center">
        <div class="col-6 text-center  my-3 mt-5">
            <h1 class="titulo-post" >{{$publicacion->titulo}}</h1>
            <span class="text-sub">Recuperado de internet por: <u> {{$publicacion->autor}} <i class="fa fa-heart"></i> </u> </span>
        </div>
        <div class="col-12 text-center my-3 p-0 mt-1">
            <form action="{{route('reaccion.store')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="publicacion_id" value="{{$publicacion->id}}">
                <h5>Reacciones: </h5>
                <div class="btn-group">
                    <button class="btn btn-danger d-block btn-sm" name="reaccion" value="loveit">
                        <i class="fa fa-heart text-white"></i>
                        {{$contador_loveit}}
                    </button>
                    <button class="btn btn-primary d-block btn-sm" name="reaccion" value="like">
                        <i class="fa fa-thumbs-up"></i>
                        {{$contador_likes}}
                    </button>
                    <button class="btn btn-secondary d-block btn-sm" name="reaccion" value="dislike">
                        <i class="fa-solid fa-thumbs-down"></i>
                        {{$contador_dislikes}}
                    </button>
                </div>
            </form>
        </div>
        
        <div class="col-12 text-center mt-2">
            {{dd($reaccion)}}
            {{-- @if (isset($reaccion[0]  && $reaccion[0]->reaccion))
                <span class="fw-bold h3 bg-light p-3 border border-4">
                    {!!$reaccion[0]->reaccion == 'like' ?  '<i class="fa fa-thumbs-up text-primary text-underline"></i> You Like This' : '' !!}
                    {!!$reaccion[0]->reaccion == 'dislike' ?  '<i class="fa fa-thumbs-down text-secondary text-underline"></i> You Dislike This' : '' !!}
                    {!!$reaccion[0]->reaccion == 'loveit' ?  '<i class="fa fa-heart text-danger text-underline"></i>  You Love This' : '' !!}
                </span>
            @endif --}}

        </div>
        
        
        <div class="col-10 mt-5">
            <b>Introducción: </b>
            <p>{{$publicacion->introduccion}}</p> 
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <img src="{{asset(Storage::url($publicacion->portada))}}" class="img-fluid w-75 m-5" alt="">
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-8">
            {!!$publicacion->cuerpo!!}
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<div class="container mt-4 bg-white shadow p-4">

    <div class="row ">
        <div class="col-12">
            <h4 class="titulos">Comentarios</h4>
        </div>
    </div>  


    <div class="row mt-3" id="comentariosContenedor">
        @forelse ($publicacion->comentarios as $comentario)
            <div class="col-12 MB-5">
                <div class="form-group">
                    <b class="text-secondary">@php $nombre = DB::table('users')->where('id',  $comentario->user_id )->get(); echo $nombre[0]->name;@endphp</b> <br>

                    <p class="bg-gray px-3">
                        {{$comentario->comentario}}
                    </p>

                    <small>{{$comentario->created_at->diffForHumans()}}</small>
                </div>
                <hr style="width: 95%; height: 2px; background-color: gray; border: none; margin: 5px auto;">
            </div>
        @empty
        <li>No hay comentarios</li>
        @endforelse
    </div>


    <div class="row ">
        <div class="col-12">
            <div class="form-group">
                <b>{{Auth()->user()->name}}</b>
                <form action="{{route('comentario.store')}}" method="POST" id="comentario" >
                    @csrf
                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                    <input type="hidden" name="id_publicacion" value="{{$publicacion->id}}">
                    <textarea name="comentario" class="w-100 form-control my-2"  placeholder="Comentario ... " ></textarea>
                    <button class="btn btn-success" type="submit">Comentar</button>
                </form>
            </div>
        </div>
    </div>







</div>
    
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function () { 
        // Esperamos a que la página cargue completamente antes de ejecutar el código
    
        document.getElementById("comentario").addEventListener("submit", function (e) {
            e.preventDefault(); // Evita que la página se recargue al enviar el formulario
            let form = this; // Referencia al formulario
            let formData = new FormData(form); // Creamos un objeto FormData con los datos del formulario
    
            // Enviamos la solicitud con Fetch API
            fetch("{{ route('comentario.store') }}", {
                method: "POST", // Método HTTP
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value // Token CSRF para seguridad
                },
                body: formData // Enviamos los datos del formulario
            })

            .then(response => response.json()) // Convertimos la respuesta a JSON
            .then(data => {
                if (data.success) { 
                    // Si el comentario se guardó correctamente, lo agregamos a la lista sin recargar
    
                    let comentariosContainer = document.getElementById("comentariosContenedor"); // Contenedor de comentarios
                    
                    let nuevoComentario = document.createElement("div"); // Creamos un nuevo div para el comentario
                    nuevoComentario.classList.add("row", "mt-3"); // Agregamos clases para darle estilo
    
                    // Agregamos el contenido del comentario en formato HTML
                    nuevoComentario.innerHTML = `
                        <div class="col-12">
                            <div class="form-group">
                                <b>{{Auth::user()->name}}</b> <br>
                                <p class="bg-gray border py-2">${data.comentario}</p>
                                <small>Hace un momento</small>
                            </div>
                        </div>
                    `;
    
                    comentariosContainer.append(nuevoComentario); // Agregamos el nuevo comentario al inicio de la lista
                    form.reset(); // Limpiamos el textarea después de enviar el comentario
                } 
                
                else {
                    alert("Error al enviar el comentario." +  response.json()); // Si algo sale mal, mostramos una alerta
                }
            })
            .catch(error => alert("Error en AJAX:", error)); // Capturamos y mostramos errores en la consola
        });
    });
    </script>
    
