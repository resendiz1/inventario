@extends('layout')
@section('contenido')
@include('user.cabecera') 

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Reportes</h2>
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
                        <th scope="col">ID</th>
                        <th scope="col">Fecha de reporte</th>
                        <th scope="col">Fecha de solución</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Estado</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>001</td>
                        <td>2024-08-08</td>
                        <td>2024-08-08</td>
                        <td>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </td>

                        <td class="text-start">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Pendiente
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#completo" style="cursor: pointer">Completo</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#reenviar" style="cursor: pointer">Reenviar petición</a>
                                </div>
                            </div>                            
                        </td>      

                    </tr>
                    
                    <tr>
                        <td>001</td>
                        <td>2024-08-08</td>
                        <td>pendiente</td>
                        <td>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </td>
                        <td class="text-start"> <i class="fa fa-check-circle"></i> Completado </td>                      
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </div>
 </div> {{-- ciertre del container que cierra todo --}}






  <!-- Modal -->
  <div class="modal fade" id="completo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <h4>¿Se completo el pedido?</h4>
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
    <div class="modal fade" id="reenviar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    <div class="modal fade" id="reporte" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
                <h3>Nuevo reporte</h3><hr> <br>
                <div class="form-group">
                    <label for="" class="m-0">Descripción de la falla</label>
                        <textarea type="text" class="form-control h-25 w-100"></textarea>
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






@endsection
    
