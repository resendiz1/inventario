
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
 
        <div class="col-12 p-3 mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="computadoras" id="check">
                        <label class="form-check-label" for="Computadoras">
                          <strong class="h4"> Computadoras </strong>
                        </label>
                      </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reguladores" id="check" >
                        <label class="form-check-label" for="Reguladores">
                            <strong class="h4"> Reguladores </strong>
                        </label>
                      </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="impresoras" id="check" >
                        <label class="form-check-label" for="impresora">
                            <strong class="h4"> Impresoras </strong>
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
                placeholder="busca por: marca, modelo o serial"
                autofocus autocomplete="address-level1">
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

   
            <div class="col-2 bg-white p-4 shadow">
                <div class="row text-start">
    
                    <div class="col-12">
                        <strong> Marca: </strong> Lenovo
                    </div>
                    <div class="col-12">
                        <strong> Modelo: </strong> TinkPad 40
                    </div>
                    <div class="col-12">
                        <strong> Serial: </strong> 321651365
                    </div>
                    <div class="col-12 mt-1">
                        <button class="btn btn-primary">
                            <i class="fa fa-eye"></i>
                            Ver detalles
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
   
        
        
      
    </div>
@endsection