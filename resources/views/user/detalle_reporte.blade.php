@extends('layout')
@section('contenido')
@section('title', 'Detalle reporte')
@include('user.cabecera')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-9 bg-white shadow">

            @if ($reporte->status == 'pendiente')
                <div class="row">
                    <div class="col-12 bg-dark p-3 text-center text-white">
                        <h2>Ticket #{{$reporte->id}}</h2>
                        <a class="text-white font-weight-bold" href="{{route('tickets.show')}}">Volver</a>
                    </div>
                </div>
            @endif

            @if ($reporte->status == 'completado')
                <div class="row">
                    <div class="col-12 bg-success p-3 text-center text-white">
                        <h2>Ticket #{{$reporte->id}}</h2>
                        <a class="text-white font-weight-bold" href="{{route('tickets.show')}}">Volver</a>
                    </div>
                </div>
            @endif
            

            <div class="row p-2">

                <div class="col-6 p-3">
                    <div class="row">
                        <div class="col-12 m-2">
                            <b>Dispositivo: </b>
                            <span>{{$reporte->dispositivo}}</span>
                        </div>
                        
                        @if ($reporte->dispositivo == 'Otro')
                        <div class="col-12 m-2">
                            <b>Falla en: </b> 
                            <span>{{$reporte->otro}}</span>
                        </div>
                        @endif
    
                        <div class="col-12 m-2">
                            <b>Descripción: </b> 
                            <span>{{$reporte->descripcion}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, incidunt alias nihil ratione eaque iure, labore.</span>
                        </div>
    
                        <div class="col-12 m-2">
                            <b>Descripción: </b> 
                            <span>{{$reporte->descripcion}}</span>
                        </div>
                    </div>
                </div>


                <div class="col-6 cascadia bg-light p-4 reportes-scroll border-0">
                    <h3>Seguimiento: </h3>

                    <div class="row">
                        <div class="col-12 mt-3">
                            <b class="h5">Usuario: </b>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, dolorem laborum saepe odit amet dolore ducimus asperiores, doloribus eos distinctio animi tempora totam similique, quis quas eum sed beatae itaque.</p>
                            <small class="font-weight-bold text-dark">Hace 3 años</small>
                        </div>


                        <div class="col-12 mt-3">
                            <b class="h5">Sistemas: </b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, dolorem laborum saepe odit amet dolore ducimus asperiores, doloribus eos distinctio animi tempora totam similique, quis quas eum sed beatae itaque.</p>
                        </div>
                        
                        <div class="col-12 mt-3">
                            <b class="h5">Sistemas: </b>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, dolorem laborum saepe odit amet dolore ducimus asperiores, doloribus eos distinctio animi tempora totam similique, quis quas eum sed beatae itaque.</p>
                        </div>

                        @if ($reporte->status != 'completado')
                            <div class="col-12 mt-2">
                                <div class="form-group">
                                    <i class="fa fa-comment"></i>
                                    <b>Usuario: </b>
                                    <textarea name="comentario" class="form-control w-100 h-25"></textarea>
                                </div>
                                <div class="from-group">
                                    <button class="btn btn-dark btn-sm">Enviar</button>
                                </div>
                            </div>
                        @endif



                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



    
@endsection