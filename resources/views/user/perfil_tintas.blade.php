@extends('layout')
@section('contenido')
@include('user.cabecera')
@section('title', 'Pedido tintas')
    

<div class="container fade-out" id="content" >
    <div class="row">
        <div class="col-12 text-center">
            @if ($errors->first('checkboxes'))
                <h5 class="text-danger font-weight-bold">Debe seleccionar almenos un color</h5>
            @endif

            @if ($errors->first('cantidad_cintas'))
                <h5 class="text-danger font-weight-bold">Debe poner cuantas cintas quiere</h5>
            @endif

            @if ($errors->first('marca'))
                <h5 class="text-danger font-weight-bold">Debe poner la marca de la impresora</h5>
            @endif  
            
            @if ($errors->first('foto_tintas'))
                <h5 class="text-danger font-weight-bold">Debe poner la marca de la impresora</h5>
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
        
        <div class="col-12 mx-1 bg-white p-4 shadow shadow-sm">
            <button class="btn btn-dark btn-sm m-1 font-weight-bold"  data-toggle="modal" data-target="#pedido">
                <i class="fa fa-plus"></i>
                Realizar pedido
            </button>
            <h3 class="text-center">
                Pedidos de tintas realizados
            </h3>
            <table class="table table-bordered table-responsive-md">
              @if (count($pedidos) > 0 )
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Fecha pedido</th>
                        <th scope="col">Fecha entrega</th>
                        <th scope="col">Insumos</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Respuesta</th>

                    </tr>
                </thead>
              @endif

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
                        <td>{{$pedido->respuesta_admin ? $pedido->respuesta_admin : 'Aún no hay respuesta'}}</td>                     
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
                        <td>{{$pedido->respuesta_admin ? $pedido->respuesta_admin : 'Aún no hay respuesta'}}</td>
                        
                      </tr>

                    @endif
                    
    
                    @empty

                      <div class="row justify-content-center p-5">
                        <div class="col-8 text-center mt-5">
                          <i class="fa-solid fa-droplet fa-4x m-3"></i>
                          <h4>No hay pedidos pendientes</h4>
                        </div>
                      </div>

                    @endforelse
          
                </tbody>
            </table>
           <small>Página: {{$pedidos->currentPage()}}</small> 
        </div>



        <div class="col-12 text-center mt-4">
          {{$pedidos->links()}}
        </div>



      </div>
 </div> {{-- ciertre del container que cierra todo --}}








    <!-- Modal -->
    <div class="modal fade" id="pedido" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <h5 class="modal-title fw-bold">
                Nuevo pedido de tintas
              </h5>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{route('tintas.pedido')}}" class="form" enctype="multipart/form-data">
                @csrf

                <div class="form-group ">
                    <label for="" class="m-0">Número </label>
                    
                    <select name="numero" class="form-control" id="tipo" value="{{old('numero')}}" >
                        <option value="544">544</option>
                        <option value="504">504</option>
                        <option value="664">664</option>
                        <option value="Otra">Mi impresora es de otra marca y/o otro tipo</option>
                        <option value="Cintas">Cintas para impresora de bascula</option>
                    </select>

                </div>


                <div class="form-group" style="display: none" id="cantidad_cintas">
                  <label for="" class="m-0">Cantidad</label>
                  <input type="number" name="cantidad_cintas" min="0" max="2" class="form-control">
                </div>

                <div class="form-group" style="display: none" id="marca">
                  <label for="" class="m-0">Marca Impresora</label>
                  <input type="text" name="marca" placeholder="Ejemplo: HP W1102W de toner" id="marca"  min="0" class="form-control " >
                </div>



                <div class="form-group" id="colores">
                    <div class="row justify-content-center ">

                        <div class="col-2 m-1 text-center p-3">
                            <label for="negro" class="m-0 h4 fw-bold">BK</label> <br>
                            <input type="checkbox" value="Negro" id="negro" name="checkboxes[]">
                        </div>

                        <div class="col-2 m-1 text-center p-3 " style="color: magenta">
                            <label for="rosa" class="m-0 h4" >M </label> <br>
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
                    <div class="row justify-content-center">
                      <div class="col-12">
                        <input type="file" name="foto_tintas" class="form-control" id="foto_tintas">
                      </div>
                      
                      <div class="col-8" id="contenedor_foto">

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





{{-- //aqui van a ir los scripts --}}
<script>

  //este es el script que controla el formulario de pedidos de tintas
    const select_tipo = document.getElementById('tipo').addEventListener('change', function(){
    const valor_select = this.value;
    const colores = document.getElementById('colores');
    const cantidad_cintas = document.getElementById('cantidad_cintas');
    const marca_impresora = document.getElementById('marca');


    if(valor_select === 'Cintas'){

      colores.style.display = 'none';
      cantidad_cintas.style.display ='block';
      marca_impresora.style.display = 'none';

    }

    else{

      colores.style.display = 'block';

    }
    

    if(valor_select === "Otra"){
      marca_impresora.style.display = 'block';
      cantidad_cintas.style.display ='none';
    }

    if(valor_select != "Otra" && valor_select != "Cintas"){
      marca_impresora.style.display = 'none';
      cantidad_cintas.style.display ='none';
    }

  });

</script>



{{-- //este hace que la imagen del pedido tnga una vista previa --}}
<script>

  document.getElementById('foto_tintas').addEventListener("change", function(event){
    const contenedor = document.getElementById('contenedor_foto');
    
    contenedor.innerHTML = "";
    const archivo = event.target.files[0];

    if(archivo){
      
      const reader = new FileReader();
      reader.onload = function(e){
        const img = document.createElement("img");
        img.src = e.target.result;
        img.classList.add("img-fluid", "mt-2");
        img.style.maxWidht = "100%";
        img.style.border = "2px solid #ccc";
        img.style.borderRadius= "8px";
        contenedor.appendChild(img);
      }

      reader.readAsDataURL(archivo);

    }



  });

</script>

@endsection