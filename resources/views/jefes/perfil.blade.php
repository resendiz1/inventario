@extends('layout')
@section('contenido')
@section('title', 'Empleado con subordinados') 
@include('user.cabecera')



<div class="container">

    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-bordered table-responsive-md">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Fecha pedido</th>
            <th scope="col">Fecha entrega</th>
            <th scope="col">Insumos</th>
            <th scope="col">Estado</th>

        </tr>
    </thead>
    <tbody>
        
      @forelse ($pedidos as $pedido)


        @if($pedido->status != "pendiente")

          <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->numero == 'Otra' ? '' : $pedido->numero}} <b> {{$pedido->marca}} </b> <b> {{$pedido->cantidad}} </b> </td>
            <td>{{$pedido->fecha_pedido}}</td>
            <td>{{$pedido->fecha_entrega}}</td>
            <td>{{ implode(', ', json_decode($pedido->colores, true)) }} </td>
            <td class="text-start"> <i class="fa fa-check-circle"></i> Completado</td>                      
          </tr>

        @else
        

          <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->numero == 'Otra' ? '' : $pedido->numero}} <b> {{$pedido->marca}} </b> <b> {{$pedido->cantidad}} </b> </td>
            <td>{{$pedido->fecha_pedido}}</td>
            <td>{{$pedido->fecha_entrega}}</td>
            <td>{{ implode(', ', json_decode($pedido->colores, true)) }}</td>
            
            <td class="text-start">
              <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                  Pendiente
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" data-toggle="modal" data-target="#c{{$pedido->id}}" style="cursor: pointer">Completo</a>
                  {{-- <a class="dropdown-item" data-toggle="modal" data-target="#r{{$pedido->id}}" style="cursor: pointer">Reenviar petición</a> --}}
                </div>
              </div>                            
            </td>                      
          </tr>

        @endif
        

        @empty
           <li>No hay datos</li> 
        @endforelse

    </tbody>
</table>
        </div>
    </div>


</div>








@endsection