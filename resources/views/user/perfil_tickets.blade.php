@extends('layout')
@section('contenido')
@include('user.cabecera') 
@section('title', 'Reportes de fallas')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Reportes</h2>
            @if (session('reportado'))
                <h5 class="font-weight-bold text-center text-success">
                  {{session('reportado')}}
                </h5>
            @endif
        </div>
    </div>


    <div class="row d-flex justify-content-around">
        
        <div class="col-12 mx-1 bg-white p-4 shadow shadow-sm">
            <button class="btn btn-light btn-sm m-1 font-weight-bold" data-toggle="modal" data-target="#reporte">
                <i class="fa fa-plus"></i>
                Realizar reporte
            </button>
            <table class="table table-bordered table-responsive-md" style="transition: 3s">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Dispositivo</th>
                        <th scope="col">Fecha de reporte</th>
                        <th scope="col">Fecha de solución</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Estado</th>

                    </tr>
                </thead>
                <tbody>
                   
                @forelse ($reportes as $reporte)
                  @if ($reporte->status == 'pendiente')
                      <tr>
                        <td>{{$reporte->dispositivo}}</td>
                        <td>{{$reporte->fecha_reporte}}</td>
                        <td>{{$reporte->fecha_solucion}}</td>
                        <td>{{$reporte->descripcion}}</td>

                        <td class="text-start">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Pendiente
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#c{{$reporte->id}}" style="cursor: pointer">Completo</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#r{{$reporte->id}}" style="cursor: pointer">Reenviar petición</a>
                                </div>
                            </div>                            
                        </td>      
                      </tr>
                  @else
                      <tr>
                        <td>{{$reporte->dispositivo}}</td>
                        <td>{{$reporte->fecha_reporte}}</td>
                        <td>{{$reporte->fecha_solucion}}</td>
                        <td>{{$reporte->descripcion}}</td>
                        <td class="text-start"> <i class="fa fa-check-circle"></i> Completado </td>                      
                      </tr>     
                      
                  @endif
                
                @empty
                    <li>No hay reportes</li>
                @endforelse



             
                    
                    
                </tbody>
            </table>
        </div>

    </div>
 </div> {{-- ciertre del container que cierra todo --}}




@forelse ($reportes as $reporte)
    

<!-- Modal -->
<div class="modal fade" id="c{{$reporte->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <h4>¿Se completo el pedido? </h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success">
            <i class="fa fa-check"></i>
            Confirmar
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  

  
  <!-- Modal -->
  <div class="modal fade" id="r{{$reporte->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
      
@empty
@endforelse
      

    <!-- Modal -->
    <div class="modal fade" id="reporte" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
              <form action="{{route('reporte.post')}}" method="post">
                @csrf @method('post')

                <h3>Nuevo reporte</h3><hr> 
                <div class="form-group">
                    <label for="" class="m-0">Descripción de la falla</label>
                        <textarea type="text" name="descripcion" class="form-control h-25 w-100">{{old('descripcion')}}</textarea>
                </div>
                  <div class="form-group">
                    <label for="" class="m-0">Dispositivo que fallo</label>
                    <select name="dispositivo" class="form-control">
                      <option value="computadora">Computadora</option>
                      <option value="telefono">Teléfono</option>
                      <option value="impresora">Impresora</option>
                      
                    </select>
                  </div>

          

            </div>

            <div class="modal-footer">
              <button class="btn btn-success">
                <i class="fa fa-check"></i>
                Confirmar
              </button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->






@endsection
    
