@extends('layout')
@section('contenido')
@section('title', 'Lista de dispositivos')
@include('assets.nav')
@include('assets.nav_dispositivos')






<div class="container mx-3 bg-white mt-5">
    <div class="row p-5">
        <div class="col-12">
          <h4>Computadoras</h4>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Responsable</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Procesador</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Accesorios</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($computadoras as $computadora)
                  <tr>
                    <th>{{$computadora->user->name}}</th>
                    <td>{{$computadora->marca}}</td>
                    <td>{{$computadora->modelo}}</td>
                    <td>{{$computadora->procesador}}</td>
                    <td>{{$computadora->ram}}</td>
                    <td>{{$computadora->accesorios}}</td>
                    <td>{{$computadora->tipo}}</td>
                    <td>{{$computadora->estado}}</td>


                  </tr>
    
                @empty
                    
                @endforelse

                </tbody>
              </table>
        </div>
    </div>
</div>





@endsection