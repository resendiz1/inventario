@extends('layout')
@section('title', 'Perfil Consejo Directivo')
@section('contenido')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 text-center bg-white mt-2 p-5 shadow-sm">
                <h1 class="fw-bold">PEDIDOS REALIZADOS</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid mt-5">

        @forelse ($pedidos as $pedido)
        <div class="row justify-content-center mt-5">
            <div class="col-10 bg-white shadow-sm p-5">
                <div class="row h4">
                    <div class="col-3">
                        <b>Nombre: </b> <br>
                        Arturo Resendiz López
                    </div>
                    <div class="col-3">
                        <b>Puesto: </b> <br>
                        Encargado del Area de Sistemas
                    </div>
                    <div class="col-3">
                        <b>Tintas: </b> <br>
                        Negra, Rosa, Azul
                    </div>
                    <div class="col-1">
                        <b>Tipo: </b> <br>
                         544
                    </div>
                    <div class="col-2">
                        <button class="btn btn-dark btn-sm mt-3">
                            <i class="fa fa-eye"></i>
                            Ver Foto
                        </button>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 text-center mt-5">
                        <div class="btn-group">
                            <button class="btn btn-success btn-lg h3">
                                <i class="fa fa-check-circle mx-3"></i>
                                Autorizar
                            </button>
                            <button class="btn btn-danger btn-lg h3">
                                <i class="fa fa-clock mx-3"></i>
                                Pendiente para la proxima semana
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse



    </div>

    

@endsection