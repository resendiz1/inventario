@extends('layout')
@section('title', 'Publicaciones')
@section('contenido')
@include('user.cabecera')

<div class="container  bg-white shadow shadow-sm fade-out" id="content">

    <div class="row justify-content-center">
        <div class="col-6 text-center  my-5">
            <h1 class="titulo-post" >{{$publicacion->titulo}}</h1>
            <span class="text-sub">Recuperado de internet por: <u> {{$publicacion->autor}} <i class="fa fa-heart"></i> </u> </span>
        </div>

        {{-- <div class="col-12 text-center my-3 p-0 mt-1">
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
        </div> --}}

        <div class="col-10">
            <p>{{$publicacion->introduccion}}</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8 text-center m-3">
            <img src="{{Storage::url($publicacion->portada)}}" class="img-fluid w-75 m-5" alt="">
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

    <div class="row mb-5">
        <div class="col-12">
            <h4 class="titulos">Comentarios</h4>
        </div>
    </div>  
    <hr>
    <div class="row ">
        <div class="col-12">
            <div class="form-group">
                <b>Arturo Resendiz López</b>
                <form action="{{route('comentario.store')}}" method="POST" id="comentarioFormulario" >
                    @csrf
                    <textarea name="comentario" class="w-100 form-control my-2"  placeholder="Comentario ... " ></textarea>
                    <button class="btn btn-success">Comentar</button>
                </form>
            </div>
        </div>
    </div>



    <div class="row mt-5" id="comentariosContenedor">
        <div class="col-12">
            <div class="form-group">
                <b>Arturo Resendiz López</b> <br>
                <p class="bg-gray border py-2">
                    Este es un comentario de prueba para poder hacer bulto con el texto y mirar masomenos como va a quedar el diseño, recien se le esta dando funcionalidad a esto.
                </p>
                <small>Hace 2 horas</small>
            </div>
        </div>
    </div>



</div>
    
@endsection


@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function(){

        document.getElementById('comentariosFormulario').addEventListener('submit', function(e){
            e.preventDefault();

            let form = this;
            let formData = new formData(form);

            //se envia la solicitud a fethcAPI
            fetch("{{route('comentario.store')}}",{
                method: "POST",
                headers:{
                    "X-CSRF-TOKEN": document.querySelector('input[name=_token]').value
                },
                body: formData // se envian los datos del formulario
            })
            .then(response => response.json()); //se convierte la respuesta en un json
            .then(data => {

                if(data.success){ //si el comentario se agrego correctamente

                    let comentariosContenedor = document.getElementById('comentariosContenedor');
                    let nuevoComentario = document.createElement("div");
                    nuevoComentario.classList.add("row", "mt-3");

                    //se agrega el nue vo comentario al HTML
                    nuevoComentario.innerHTML = `
                        <div class="col-12">
                            <div class="form-group">
                                <b>Arturo Resendiz López</b> <br>
                                <p class="bg-gray border py-2">${data.comentario}</p>
                                <small>Hace un momento</small>
                            </div>
                        </div>
                `;

                comentariosContenedor.prepend(nuevoComentario); //Agregar comentario

                form.reset();
                }
                else{
                    alert('Error al enviar comentario')
                }
            })
            .catch(error => console.error("Error AJAX:" , error));
        });
    });

</script>


@endsection