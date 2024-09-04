@extends('layout')
@section('contenido')
@section('title', "Perfil Admin")
@include('assets.nav')

    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Computadoras: </b> {{$cantidad_computadoras}}
            </div>
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Impresoras: </b> {{$cantidad_impresoras}}
            </div>
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Teléfonos: </b> {{$cantidad_telefonos}}
            </div>
        </div>
    </div>




    <div class="container-fluid">

        <div class="row justify-content-center">


            <div class="col-5 bg-white m-1 border border-3 mt-5">
                <h4 class="py-3 font-weight-bold" >Pedidos de tintas pendientes</h4>

                <table class="table table-bordered table-responsive-md p-0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Pedido</th>
                                <th scope="col">Colores</th>
                                <th scope="col">Número</th>
        
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pedidos as $pedido)
                                <tr>
                                    <td>{{$pedido->user->name}}</td>
                                    <td>{{$pedido->fecha_pedido}}</td>
                                    <td>{{implode(', ',json_decode($pedido->colores, true))}}</td>
                                    <td>{{$pedido->numero}}</td>                   
                                </tr>     
                            @empty
             
                            @endforelse


    
                    </tbody>
                </table>

            </div>





            <div class="col-6 bg-white m-1 mt-5 border border-3">
                <h4 class="py-3 font-weight-bold" >Reportes de usuarios</h4>

                <table class="table table-bordered table-responsive-md p-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Reporte</th>
                                <th scope="col">Dispositivo</th>
                                <th scope="col">Descripción</th>        
                            </tr>
                        </thead>
                        <tbody>
                        
                            @forelse ($reportes as $reporte)                               
                                <tr>
                                    <td>{{$reporte->user->name}}</td>
                                    <td>{{$reporte->fecha_reporte}}</td>
                                    <td>{{$reporte->dispositivo}}</td>
                                    <td>{{$reporte->descripcion}}</td>                     
                                </tr>     
                            @empty
                                
                            @endforelse
                            
                            

    
                    </tbody>
                </table>

            </div>






        </div>
    </div>




@endsection