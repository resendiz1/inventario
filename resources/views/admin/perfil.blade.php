@extends('layout')
@section('contenido')
@section('title', "Perfil Admin")
@include('assets.nav')

    {{-- <div class="container-fluid mt-3">
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
    </div> --}}




    <div class="container-fluid">

        <div class="row justify-content-center">


            <div class="col-sm-12 col-md-5 col-lg-4 bg-white m-1 border border-5 mt-5 scroll-tabla">
                <h4 class="py-3 font-weight-bold text-center" >Pedidos de tintas pendientes</h4>

                <table class="table table-bordered table-responsive-md p-0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Pedido</th>
                                <th scope="col">Colores</th>
                                <th scope="col">Número</th>
                                <th scope="col">Acciones</th>
        
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pedidos as $pedido)
                                <tr>
                                    <td>{{$pedido->user->name}}</td>
                                    <td>{{$pedido->fecha_pedido}}</td>
                                    <td>{{implode(', ',json_decode($pedido->colores, true))}}</td>
                                    <td>{{$pedido->numero}}</td>   
                                    <td> <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#r{{$pedido->id}}">Responder</button> </td>               
                                </tr>     
                            @empty
             
                            @endforelse


    
                    </tbody>
                </table>

            </div>





            <div class="col-sm-12 col-md-5 col-lg-7 bg-white m-1 mt-5 border border-3 scroll-tabla">
                <h4 class="text-center py-3 font-weight-bold" >Reportes de usuarios</h4>
                
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








    {{-- AQUI VAN LOS MODALES DE LA APLICACION --}}

@forelse ($pedidos as $pedido)
    
<!-- Modal -->
<div class="modal fade" id="r{{$pedido->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-body p-4">
                        <form action="">
                            <div class="form-group">
                                <h5 class="font-weight-bold cascadia" >Escribe tu respuesta</h5>
                                <textarea class="form-control w-10 h-100" name="respuesta_pedido" placeholder="Se envian solo negra y rosa por que las otras no las hay"></textarea>
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-success">Enviar</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    @empty
    
@endforelse
    
    
@endsection