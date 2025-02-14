@extends('layout')
@section('title', 'Home')
@section('contenido')
@include('user.cabecera')

<div class="container-fluid fade-out" id="content">

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-7 text-center bg-white shadow-sm py-2">
            <h2 class="font-arimo">Seguridad Informática</h2>
        </div>
    </div>


    <div class="row justify-content-around mt-5 mx-2">

   
        @forelse ($publicaciones as $publicacion)
            <div class="col-sm-12 col-md-9 col-lg-3 bg-white shadow m-2">
                <div class="row justify-content-center">
                    <div class="col-12 p-0">
                        <img src="{{Storage::url($publicacion->portada)}}" class="img-fluid w-100" alt="">
                    </div>

                    <div class="col-12 m-2">
                        <h1 class="font-maker">{{$publicacion->titulo}}</h1>
                    </div>

                    <div class="col-12">
                        <p>
                            {{$publicacion->introduccion}}
                        </p>
                    </div>

                    <div class="col-12 m-3 text-center">
                        <a href="{{route('mostrar.post', $publicacion->id)}}" class=" btn btn-secondary h3 ">
                            <i class="fa fa-eye mx-2"></i>
                            Ir a la publicación
                        </a>
                    </div>

                    {{-- Dejamos pendientes las reacciones --}}

                    {{-- <div class="col-12 text-center mt-1 p-3">
                        <form action="{{route('reaccion.store')}}" method="POST" id="reaccion_formulario" >
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="publicacion_id" value="{{$publicacion->id}}">
      
                                    <div class="btn-group">
                                        <button class="btn btn-danger d-block reaccion_boton" id="loveit_count" name="reaccion" value="loveit">
                                            <i class="fa fa-heart text-white"></i>
                                            {{$publicacion->loveit_count}}
                                        </button>

                                        <button class="btn btn-primary d-block reaccion_boton" id="like_count" name="reaccion" value="like">
                                            <i class="fa fa-thumbs-up"></i>
                                            {{$publicacion->like_count}}
                                        </button>

                                        <button class="btn btn-secondary d-block reaccion_boton" id="dislike_count" name="reaccion" value="dislike">
                                            <i class="fa-solid fa-thumbs-down"></i>
                                            {{$publicacion->dislike_count}}
                                        </button>
                                    </div>
                        </form>
                    </div> --}}

                    {{-- Dejamos pendientes las reacciones --}}


                </div>
            </div>
        @empty
            <li>No hay nada</li>
        @endforelse


        

    </div>



</div>


@endsection    


{{-- esta es l seccion de los scripts --}}
@section('scripts')
<script>


    $(document).ready(function(){
        $('.reaccion_boton').click(function(e){
           

            e.preventDefault();

            let reaccion = $(this).data('reaccion');
            let form = $("#reaccion_formulario");
            let formData = form.serialize() + "&reaccion" + reaccion;

            $.ajax({
                url: form.attr("action"),
                type: "POST",
                data:formData,

                success: function(response){
                    $("#loveit_count").text(response.loveit_count);
                    $("#like_count").text(response.like_count);
                    $("#dislike_count").text(response.dislike_count);
                },
                error: function(response){
                    alert("Hubo un error!" + response);
                    console.log(response)
                }

            })
        })
    })
</script>
@endsection