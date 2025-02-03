@extends('layout')
@section('title', 'Directorio')
@section('contenido')
@include('user.cabecera')    

<div class="container-fluid fade-out" id="content">

    <div class="row mb-2 my-4 justify-content-center">
        <div class="col-sm-12 col-md-9 col-lg-6 bg-white shadow shadow-sm p-3 text-center">
                <h5 class="font-weight-bold">Buscar en el directorio: </h5>
                <input type="search" id="buscador" class="form-control cascadia font-weight-bold negro" placeholder="Buscar por:  nombre, extensión, correo, celular, puesto o planta" autofocus >
        </div>
    </div>


    <div class="row justify-content-center" id="contenedor" >
            @forelse ($usuarios as $usuario)
                
            <div class="col-sm-12 col-md-5 col-lg-3 border shadow shadow-sm  p-3 bg-white m-1">
                <div class="row">
                        <div class="col-12 text-center search mb-2">
                            <b class="h4">{{$usuario->name}}</b> 
                            <br>
                            <h6>{{$usuario->puesto}}</h6>
                        </div>
                        <div class="col-12 m-1">
                            <b>Email : </b>
                            <span>
                                {{$usuario->correo}}
                            </span>
                        </div>

                        @if ($usuario->celular)
                        <div class="col-12 m-1">
                            <b>Celular : </b> 
                            <span>{{$usuario->celular}}</span>
                        </div>
                        @endif

                        <div class="col-12 m-1">
                            <b>Extensión : </b> 
                            <span>{{$usuario->extension}}</span>
                        </div>
                        <div class="col-12 m-1">
                            <b>Planta : </b>
                            <span>{{$usuario->planta}}</span>
                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
                
                
    </div>

</div>





<script>
    //aqui esta el codigo para realizar la busqueda en  tiempo real
    const searchInput = document.getElementById('buscador');
    const contenedor = document.getElementById('contenedor');
    const userDivs = contenedor.getElementsByClassName('col-sm-12');

    searchInput.addEventListener('keyup', function(){

        const filtro = searchInput.value.toLowerCase();

        Array.from(userDivs).forEach(function(userDiv){

            const userText = userDiv.innerText.toLowerCase();

            if (userText.indexOf(filtro) > -1) {
                userDiv.style.display = "";



            } else {
                userDiv.style.display = "none";
            }

        })

    });




</script>





@endsection