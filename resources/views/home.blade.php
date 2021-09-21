
@extends('layout')
@section('title', 'Buscador')
@section('content')
    
<div class="container ">

    <form action="{{route('home.buscar')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row pt-5 d-flex justify-content-center">
 
        <div class="col-12 text-center">
            <img src="img/logo.png" class=" img-fluid" style="width: 200px;" alt="">
        </div>
 
        <div class="col-4 col-12 p-3 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-4 text-center mb-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="computadoras" id="check">
                        <label class="form-check-label" for="Computadoras">
                          <strong class="h4"> Computadoras </strong>
                        </label>
                      </div>
                </div>
                <div class="col-4 col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reguladores" id="check" >
                        <label class="form-check-label" for="Reguladores">
                            <strong class="h4"> Reguladores </strong>
                        </label>
                      </div>
                </div>
                <div class="col-4 col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="impresoras" id="check" >
                        <label class="form-check-label" for="impresora">
                            <strong class="h4"> Impresoras </strong>
                        </label>
                      </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-lg-2 col-md-3 col-sm-4 text-center mb-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="marca" id="check">
                        <label class="form-check-label" for="Marca">
                          <strong class="h4"> Marca </strong>
                        </label>
                      </div>
                </div>
                <div class="col-4 col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="serie" id="check" >
                        <label class="form-check-label" for="# Serie">
                            <strong class="h4"> # Serie </strong>
                        </label>
                      </div>
                </div>
                <div class="col-4 col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="modelo" id="check" >
                        <label class="form-check-label" for="impresora">
                            <strong class="h4"> Modelo </strong>
                        </label>
                      </div>
                </div>
            </div>
        </div>
   
        <div class="col-12 col-sm-12 col-md-9 col-lg-6">
            <input 
                type="text"
                name="busqueda" 
                class="form-control form-control-lg rounded-pill shadow-sm" 
                placeholder="buscar"
                autofocus autocomplete="address-level1">
                @error('busqueda')
                    <div class="alert alert-danger alert-sm p-1">
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class="col-12 text-center mt-2">
            <button class="btn btn-success">
                <i class="fa fa-search"></i>
                Buscar
            </button>
        </div>
   </div>
</form>



        <div class="row mt-5">
            <div class="col-12 h3">
                Resultados:
            </div>
        </div>

        <div class="row justify-content-around">


            @if ($resultado!="")
                
            
            @forelse ($resultado as $itemResultado)
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 bg-white p-4 shadow m-1">
                <div class="row text-start">
    
                    <div class="col-12">
                        <strong> Marca: </strong> {{$itemResultado->marca}}
                    </div>
                    <div class="col-12">
                        <strong> Modelo: </strong> {{$itemResultado->modelo}}
                    </div>
                    <div class="col-12">
                        <strong> Serial: </strong> {{$itemResultado->serie}}
                    </div>
                    <div class="col-12 mt-1">
                        <button class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                            Ver detalles
                        </button>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-success alert-sm font-weight-bold">
                    <i class="fa fa-times-circle"></i>
                    No se encontraron resultados
                </div>

            @endforelse
           
 
            @endif

        </div>
        
   
        
        
      
    </div>
@endsection