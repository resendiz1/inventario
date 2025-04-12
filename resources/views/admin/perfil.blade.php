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

        <div class="row justify-content-center d-flex align-items-center">


            <div class="col-sm-12 col-md-12 col-lg-10 bg-white m-1 border border-5 mt-5 ">
                <h1 class="py-3 font-weight-bold" >Pedidos de Tintas </h1>
                @if (session('respuesta'))
                    <h6 class="text-danger">{{session('respuesta')}}</h6>
                @endif
                <table class="table table-bordered table-responsive-md p-0">
                        @if (count($pedidos) > 0 )
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Acciones</th>
                                <th scope="col">Respuesta Admin</th>
                                <th scope="col">Detalles</th>
                            </tr>
                        </thead>
                        @endif
                        <tbody>
                            @forelse ($pedidos as $pedido)
                                <tr>
                                    <td>{{$pedido->user->name}}</td>
                                    {{-- <td>{{$pedido->fecha_pedido}}</td>
                                    <td>{{implode(', ',json_decode($pedido->colores, true))}}</td>
                                    <td>{{$pedido->numero}}</td> --}}
                                    <td> 
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#r{{$pedido->id}}">
                                            <i class="fa fa-comment"></i>
                                        </button> 
                                    </td>  
                                    <td>{{$pedido->respuesta_admin}}</td>             
                                    <td> 
                                        <button class="btn btn-secondary btn-sm"  data-toggle="modal" data-target="#ped{{$pedido->id}}" >
                                            <i class="fa fa-eye"></i>    
                                        </button> 
                                        </td>   
                                </tr>     
                            @empty
                                
                                <div class="row mt-5 justify-content-center">
                                    <div class="col-6  text-center p-5">
                                        {{-- <img src="/img/todo_ok.png" class="img-fluid" alt=""> <br> --}}
                                        <i class="fa-solid fa-droplet fa-5x"></i> <br> <br>
                                        <h3 class="font-weight-bold text-muted">No hay pedidos</h3>
                                    </div>
                                </div>

                           @endforelse

                    </tbody>
                </table>

            </div>


            {{-- <div class="col-sm-12 col-md-12 col-lg-5 bg-white m-1 border border-5 mt-5 ">
                <h2 class="text-center mt-2 font-arimo"> Areas que mas piden tinta </h2>

                  <div class="p-5">
                    <canvas id="grafica"></canvas>
                  </div>
            </div> --}}







            <div class="col-sm-12 col-md-12 col-lg-10 bg-white m-1 mt-5 border border-3 ">
                <h1 class=" py-3 font-weight-bold" >Solicitudes de Soporte Tecnico</h1>
                
                <table class="table table-bordered table-responsive-md p-0">
                        @if (count($reportes) > 0 )
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Dispositivo</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Estado</th> 
                                    <th scope="col">Seguimiento</th>        
                                </tr>
                            </thead>
                        @endif
                        <tbody>
                            @forelse ($reportes as $reporte)   

                                <tr>
                                    <td>{{$reporte->user->name}}</td>
                                    <td>{{$reporte->fecha_larga}}</td>
                                    <td>{{$reporte->dispositivo}}</td>
                                    <td>{{$reporte->descripcion}}</td>  
                                    <td class=" font-weight-bold {{$reporte->status == 'completado' ? 'text-success' : 'text-danger'}}" >{{$reporte->status}}</td>
                                    <td> <a href="{{Route('detalle.reporte.admin', $reporte->id)}}" class="btn btn-success btn-sm">Seguimiento</a> </td>                                         
                                </tr>     
                            @empty

                            <div class="row mt-5 justify-content-center">
                                <div class="col-6  text-center p-5">
                                    {{-- <img src="/img/todo_ok.png" class="img-fluid" alt=""> <br> --}}
                                    <i class="fa-solid fa-pencil fa-5x text-dark"></i> <br> <br>
                                    <h3 class="font-weight-bold text-muted">No hay reportes</h3>
                                </div>
                            </div>

                            @endforelse
                            
                            

    
                    </tbody>
                </table>

            </div>










            <div class="col-sm-12 col-md-12 col-lg-10 bg-white m-1 mt-2 border border-3">
                <h1 class="py-3 font-weight-bold" >Respuestas Resguardos</h1>
                
                <table class="table table-bordered table-responsive-md p-0">
                            @if (count($respuestas_resguardos) > 0 )
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Puesto</th>    
                                    <th scope="col">Observaciones</th>   
                                    {{-- <th scope="col">Estatus</th>    --}}
                                </tr>
                            </thead>
                            @endif
                        <tbody>
                        
                            @forelse ($respuestas_resguardos as $respuesta)                               
                                <tr>
                                    <td>{{$respuesta->user->name}}</td>
                                    <td>{{$respuesta->user->puesto}}</td>
                                    <td>{{$respuesta->observaciones}}</td>
                                    {{-- <td><button class="btn btn-success" data-toggle="modal" data-target="#res{{$respuesta->id}}" >Resuelto</button></td> --}}
                                </tr>     
                            @empty

                            <div class="row mt-5 justify-content-center">
                                <div class="col-6  text-center p-5">
                                    {{-- <img src="/img/todo_ok.png" class="img-fluid" alt=""> <br> --}}
                                    <i class="fa-solid fa-pencil fa-5x text-dark"></i> <br> <br>
                                    <h3 class="font-weight-bold text-muted">No hay reportes</h3>
                                </div>
                            </div>

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
                        <form action="{{route('respuesta.admin', $pedido->id)}}" method="POST">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <h5 class="font-weight-bold" >Escribe tu respuesta</h5>
                                <textarea class="form-control w-10 h-100" name="respuesta_admin" placeholder="Se envian solo negra y rosa por que las otras no las hay"></textarea>
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



@forelse ($respuestas_resguardos as $respuesta)
    {{-- modal de la respuesta --}}

  
    <!-- Modal -->
    <div class="modal fade" id="res{{$respuesta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            {{$respuesta->user->name}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
    {{-- modal de la respuesta --}}
@empty
    
@endforelse
    
    



@forelse ($pedidos as $pedido)
    {{-- modal de las fotos de los pedidos, para eso bvoy a usar el mismo cicle que use en la tabla pedidos --}}
    <!-- Modal -->
    <div class="modal fade" id="ped{{$pedido->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body p-3">
                <img src="{{str_replace('storage/Public/', 'storage/', Storage::url($pedido->foto_tintas))}}" class="img-fluid" alt="">
            </div>


        </div>
        </div>
    </div>
@empty
    
@endforelse





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('grafica');

    new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1


        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    });
</script>

@endsection