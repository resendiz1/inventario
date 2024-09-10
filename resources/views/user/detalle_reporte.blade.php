@php
use Carbon\Carbon;
@endphp 
    
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
                        @if (session('comentado'))
                            <h2 class="text-success">{{session('comentado')}}</h2>
                        @endif
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
                            <span>{{$reporte->descripcion}}.</span>
                        </div>
    
                        <div class="col-12 m-2">
                            <b>Estado: </b> 
                            <span>{{$reporte->status}}</span>
                        </div>

                        <div class="col-12 m-2">
                            <b>Prioridad: </b> 
                            <span>{{$reporte->prioridad}}</span>
                        </div>


                    </div>
                </div>


                <div class="col-6 cascadia bg-light p-4 reportes-scroll border-0">
                    <h3>Seguimiento: </h3>

                    <div class="row">
                        @forelse ($comentarios as $comentario)
                            <div class="col-12 my-4">
                                <b class="font-size-18">{{$comentario->usuario}}: </b>
                                <p class="mb-0">{{$comentario->comentario}}</p>
                                <small class="font-weight-bold bd-highlight">{{Carbon::parse($comentario->created_at)->diffForHumans()}}</small>
                            </div>
                        @empty
                            <li>Sin comentarios aún</li>
                        @endforelse





                        @if ($reporte->status != 'completado')
                            <div class="col-12 mt-5 ">
                                <form action="{{route('comentario.reporte.usuario', $reporte->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <i class="fa fa-comment"></i>
                                        <b>{{Auth::user()->name}}: </b>
                                        <textarea name="comentario" class="form-control w-100 h-25" autofocus></textarea>
                                        @error('comentario')
                                           <h1> {{ $message}} </h1>
                                        @enderror
                                    </div>
                                    <div class="from-group">
                                        <button class="btn btn-dark btn-sm">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        @endif



                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



    
@endsection