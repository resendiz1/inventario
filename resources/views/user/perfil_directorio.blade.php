@extends('layout')
@section('title', 'Directorio')
@section('contenido')
@include('user.cabecera')    

<div class="container-fluid ">

    <div class="row mb-4  justify-content-center">
        <div class="col-5 bg-white shadow shadow-sm p-3 text-center">
                <h5 class="font-weight-bold">Buscar en el directorio: </h5>
                <input type="search" id="buscador" class="form-control" placeholder="Buscar por:  nombre, extensión, correo, celular, puesto o planta">
        </div>
    </div>


    <div class="row justify-content-center" id="contenedor">
            @forelse ($usuarios as $usuario)
                
            <div class="col-sm-12 col-md-5 col-lg-2 p-2 border border-5 p-3 bg-white m-1">
                <div class="row">
                        <div class="col-12 text-center mb-3 h4 search">
                            <b>{{$usuario->name}}</b>
                        </div>
                        <div class="col-12 m-1 search">
                            <b>Email:</b> <br>
                            <span>{{$usuario->email}}</span>
                        </div>
                        <div class="col-12 m-1">
                            <b>Celular:</b> <br>
                            <span>{{$usuario->celular}}</span>
                        </div>
                        <div class="col-12 m-1 search">
                            <b>Extensión: </b> <br>
                            <span>{{$usuario->extension}}</span>
                        </div>
                        <div class="col-12 m-1 search">
                            <b>Planta:</b> <br>
                            <span>Planta {{$usuario->planta}}</span>
                        </div>
                        <div class="col-12 m-1 search">
                            <b>Puesto:</b> <br>
                            <span>{{$usuario->puesto}}</span>
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