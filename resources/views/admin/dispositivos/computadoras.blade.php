@extends('layout')
@section('title', 'Agregando impresora')
@include('assets.nav')
@include('assets.nav_dispositivos')
@section('contenido')

@forelse ($computadoras as $computadora)
    {{$computadora->marca}}
@empty
    
@endforelse


@endsection