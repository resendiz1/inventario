@extends('layout')
@section('contenido')
@include('user.cabecera')
<div class="container-fluid">

    <div class="row">
        <div class="col-12  text-center">
            <h2>Dispositivos</h2>
        </div>
    </div>
    
    <div class="row justify-content-center">


        @forelse ($computadoras as $computadora)
            <div class="col-2 bg-white shadow shadow-sm mx-4 p-5 mt-2">
                <div class="row">
                    <div class="col-12">
                        <h3>Computadora</h3>
                    </div>
                    <div class="col-auto m-1">
                        <span><b> Marca: </b> {{$computadora->marca}}</span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b> Modelo: </b> {{$computadora->modelo}}</span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Sistema Operativo : </b> {{$computadora->SO}}</span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Tamaño HDD : </b> {{$computadora->size_hdd}} GB </span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Tipo : </b> {{$computadora->tipo}} </span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Tamaño SSD : </b> {{$computadora->size_ssd}} GB </span>
                    </div>
                </div>
            </div>
        @empty
            <li>No hay datos de computadoras</li>
        @endforelse
        




    

        @forelse ($impresoras as $impresora)            
            <div class="col-2 bg-white shadow shadow-sm mx-4 p-5 mt-2">
                <div class="row">
                    <div class="col-12">
                        <h3>Impresora</h3>
                    </div>
                    <div class="col-auto m-1">
                        <span><b> Marca: </b> {{$impresora->marca}}</span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b> Modelo: </b> {{$impresora->modelo}}</span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Serie : </b> {{$impresora->serie}} </span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Tipo : </b> {{$impresora->tipo}}</span>
                    </div>
                    <div class="col-auto m-1">
                        <span><b>Observaciones : </b> {{$impresora->observaciones}}</span>
                    </div>
                </div>
            </div>
        @empty
            <li>No hay datos de impresoras</li>
        @endforelse
        




        @forelse ($telefonos as $telefono)
        <div class="col-2 bg-white shadow shadow-sm mx-4 p-5 mt-2">
            <div class="row">
                <div class="col-12">
                    <h3>Teléfono</h3>
                </div>
                <div class="col-auto m-1">
                    <span><b> Marca: </b> {{$telefono->marca}}</span>
                </div>
                <div class="col-auto m-1">
                    <span><b> Modelo: </b> {{$telefono->modelo}}</span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Serie : </b> {{$telefono->serie}} </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Tipo : </b> {{$telefono->tipo}} </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Observaciones : </b> {{$telefono->observaciones}}  </span>
                </div>
            </div>
        </div>

        @empty
            
        @endforelse





    </div>



 </div>

@endsection