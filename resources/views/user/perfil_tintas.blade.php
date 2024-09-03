@extends('layout')
@section('contenido')
@include('user.cabecera')
@section('title', 'Pedido tintas')
    

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Tintas</h2>

            @if ($errors->first('checkboxes'))
                <h5 class="text-danger font-weight-bold">Debe seleccionar almenos un color</h5>
            @endif


            @if (session('pedido_enviado'))
                <h5 class="text-success text-center font-weight-bold">              
                  {{session('pedido_enviado')}}
                </h5>
            @endif

            @if (session('anticipado'))
              <li class="text-danger text-center font-weight-bold h5">              
                  {{session('anticipado')}}
              </li>
            @endif

            @if (session('completado'))
            <li class="text-success text-center font-weight-bold h5">              
                {{session('completado')}}
            </li>
            @endif
          
        </div>
    </div>


    <div class="row d-flex justify-content-around">
        
        <div class="col-11 mx-1 bg-white p-4 shadow shadow-sm">
            <button class="btn btn-dark btn-sm m-1 font-weight-bold"  data-toggle="modal" data-target="#pedido">
                <i class="fa fa-plus"></i>
                Realizar pedido
            </button>
            <h3 class="text-center">
                Pedidos realizados
            </h3>
            <table class="table table-bordered table-responsive-md">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha pedido</th>
                        <th scope="col">Fecha entrega</th>
                        <th scope="col">Colores</th>
                        <th scope="col">Estado</th>

                    </tr>
                </thead>
                <tbody>
                    
                  @forelse ($pedidos as $pedido)


                    @if($pedido->status != "pendiente")

                      <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->numero}}</td>
                        <td>{{$pedido->fecha_pedido}}</td>
                        <td>{{$pedido->fecha_entrega}}</td>
                        <td>{{ implode(', ', json_decode($pedido->colores, true)) }} </td>
                        <td class="text-start"> <i class="fa fa-check-circle"></i> Completado</td>                      
                      </tr>

                    @else
                    
    
                      <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->numero}}</td>
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
                              <a class="dropdown-item" data-toggle="modal" data-target="#r{{$pedido->id}}" style="cursor: pointer">Reenviar petición</a>
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
 </div> {{-- ciertre del container que cierra todo --}}








    <!-- Modal -->
    <div class="modal fade" id="pedido" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <h5 class="modal-title fw-bold">
                Nuevo pedido de tintas
              </h5>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{route('tintas.pedido')}}" class="form">
                @csrf
                <div class="form-group px-3">
                    <label for="" class="m-0">Número </label>
                    <select name="numero" class="form-control" value="{{old('numero')}}" >
                        <option value="544">544</option>
                        <option value="504">504</option>
                        <option value="664">664</option>
                        <option value="otra">Mi impresora no es Epson</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="row justify-content-center ">

                        <div class="col-2 m-1 text-center p-3">
                            <label for="negro" class="m-0 h4 fw-bold">BK</label> <br>
                            <input type="checkbox" value="Negro" id="negro" name="checkboxes[]">
                        </div>

                        <div class="col-2 m-1 text-center p-3">
                            <label for="rosa" class="m-0 h4" style="color: magenta">M </label> <br>
                            <input type="checkbox" value="Rosa" id="rosa" name="checkboxes[]">
                        </div>

                        <div class="col-2 m-1 text-center p-3">
                            <label for="azul" class="m-0 h4" style="color: rgb(0, 50, 252)">C</label> <br>
                            <input type="checkbox" value="Azul" id="azul" name="checkboxes[]">
                        </div>

                        <div class="col-2 m-1 text-center  p-3">
                            <label for="amarillo" class="m-0 h4" style="color: rgb(170, 170, 40)">Y</label> <br>
                            <input type="checkbox" value="Amarillo" id="amarillo" name="checkboxes[]">
                        </div>
                    </div>
                </div>

                <button  class="btn btn-success m-2 w-100">
                  <i class="fa fa-check"></i>
                  Confirmar
                </button>
              </form>
              <button type="button" class="btn btn-secondary m-2 w-100" data-dismiss="modal">Cerrar</button>


            </div>
            
          </div>
        </div>
      </div>
      <!-- Modal -->





      @forelse ($pedidos as $pedido)
                  <!-- Modal -->
        <div class="modal fade" id="r{{$pedido->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-body">
                <h4>¿Reenviar el pedido?</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success">
                  <i class="fa fa-paper-plane"></i>
                  Reenviar
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->



        <!-- Modal -->
        <div class="modal fade" id="c{{$pedido->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-body">
                <h4>¿Se completo el pedido?</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form action="{{route('pedido.completo', $pedido->id)}}" method="POST">
                  @csrf @method('PATCH')
                  <button class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Confirmar
                  </button>
                </form>


              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
      @empty
          
      @endforelse


{{-- aqui esta el html de mi menu contextual --}}
<div class="menu-contextual" id="menuContextual">
  <ul>
      <li>
        <a data-toggle="modal" data-target="#pedido">
          <i class="fa fa-plus"></i>
            Realizar Pedido
        </a>
      </li>
  </ul>
</div>






@endsection