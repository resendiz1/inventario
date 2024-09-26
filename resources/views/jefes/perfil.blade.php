@extends('layout')
@section('contenido')
@section('title', 'Empleado con subordinados') 
@include('user.cabecera')


@if (Auth::user()->jefe)
    


<div class="container">
  <div class="row m-1">
      <div class="col-12 h4 text-center">
      {{-- notificacion --}}
              @if (session('acceso_autorizado'))
                  <span class="text-success"> {{session('acceso_autorizado')}} </span>
              @endif
              @if (session('acceso_desautorizado'))
              <span class="text-success"> {{session('acceso_desautorizado')}} </span>
          @endif
      {{-- notificacion --}}
      </div>

  </div>
</div>



<div class="container my-4">

    <div class="row justify-content-center mt-3">

        <div class="col-sm-12 col-md-12 col-lg-12 scroll-tabla mt-2 bg-white p-5">
            <h3 class="font-weight-bold">Sitios solicitado por las personas a su cargo </h3>
          @if (session('aut_sitio'))
            <div class="alert alert-success">{!!session('aut_sitio')!!}</div>
          @endif
          @if (session('sitio_desautorizado'))
            <div class="alert alert-secondary">{!!session('sitio_desautorizado')!!}</div>
          @endif
            <table class="table table-bordered table-responsive-md">

              @if (count($sitios) > 0)
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Nombre del sitio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Justificación</th>
                        <th scope="col">Autorizar</th>
                    </tr>
                </thead>
              @endif
    

              <tbody>
        
              @forelse ($sitios as $sitio)

                  
              
              <tr>
                    <td>{{$sitio->user->name}}</td>
                    <td>{{$sitio->nombre}}</td>
                    <td>{{$sitio->status ? 'Autorizado' : 'No autorizado'}}</td>
                    <td>{{$sitio->justificacion}}</td> 
                    
                    <td class="col-2">
                      <div class="btn-group">
                        <form action="{{route('autorizar.sitio.jefe', $sitio->id)}}" method="POST">
                          @csrf @method('PATCH')                            
                          <button class="btn btn-sm {{$sitio->status ? 'btn-secondary' : 'btn-success' }} " {{$sitio->status  ? 'disabled' : 'enable' }}>
                            <i class="fa fa-check"></i>
                          </button>
                        </form>

                        <form action="{{route('desautorizar.sitio.jefe', $sitio->id)}}" method="POST">
                          @csrf @method('PATCH')
                          <button class="btn  btn-sm {{$sitio->status ? 'btn-danger' : 'btn-secondary' }}" {{!$sitio->status  ? 'disabled' : 'enable' }}>
                            <i class="fa fa-xmark"></i>
                          </button>
                        </form>
                        
                      </div>
                    </td>
                    
                  </tr>


                  @empty
                  
                  <div class="row p-5 justify-content-center">
                    <div class="col-8 text-center mt-4">
                      <i class="fa-solid fa-envelope-open-text fa-5x" ></i> <br>
                      <h4>No hay solicitudes de acceso a sitios web</h4>
                    </div>
                  </div>

                  @endforelse
                
              </tbody>
          </table>
        </div>   
        {{-- aqui termina le div de la tabla --}}





        <div class="col-sm-12 col-md-12 col-lg-12 scroll-tabla mt-2 bg-white p-5">
          <h3 class="font-weight-bold">Software solicitado por las personas a su cargo</h3>
          @if (session('software_autorizado'))
          <div class="alert alert-success">{!!session('software_autorizado')!!}</div>
          @endif
          @if (session('software_desautorizado'))
          <div class="alert alert-secondary">{!!session('software_desautorizado')!!}</div>
          @endif
          <table class="table table-bordered table-responsive-md">
            @if (count($softwares) > 0 )
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">Usuario</th>
                      <th scope="col">Nombre del software</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Justificación</th>
                      <th scope="col">Autorizar</th>
                  </tr>
              </thead>
            @endif
            <tbody>
      
            @forelse ($softwares as $software)   
              <tr>
                  <td>{{$software->user->name}}</td>
                  <td>{{$software->nombre}}</td>
                  <td>{{$software->status ? 'Autorizado' : 'No autorizado'}}</td>
                  <td>{{$software->justificacion}}</td> 
                  
                  <td class="col-2">
                    <div class="btn-group">
                      <form action="{{route('autorizar.software.jefe', $software->id)}}" method="POST" class="autorisa_software">
                        @csrf @method('PATCH')                            
                        <button class="btn btn-sm {{$software->status ? 'btn-secondary' : 'btn-success' }}  " {{$software->status  ? 'disabled' : 'enable' }}>
                          <i class="fa fa-check"></i>
                        </button>
                      </form>
                      
                      <form action="{{route('desautorizar.software.jefe', $software->id)}}" method="POST">
                        @csrf @method('PATCH')
                        <button class="btn  btn-sm {{$software->status ? 'btn-danger' : 'btn-secondary' }} " {{!$software->status  ? 'disabled' : 'enable' }}>
                          <i class="fa fa-xmark"></i>
                        </button>
                      </form>
                      
                    </div>
                  </td>
                  
                </tr>
                
                @empty
                  
                <div class="row p-5 justify-content-center">
                  <div class="col-8 text-center mt-4">
                    <i class="fa-solid fa-envelope-open fa-5x" ></i> <br>
                    <h4>No hay solicitudes de software</h4>
                  </div>
                </div>

                @endforelse
                
            </tbody>
        </table>
      </div>  







    </div>


</div>



@else

<div class="container mt-5 bg-white p-5">
  <div class="row mt-4 justify-content-center p-5">
    <div class="col-5 text-center">
      <h4>No hay nada para ti aqui</h4>
      <i class="fa-brands fa-fly fa-5x"></i>
    </div>
  </div>
</div>

@endif




<script>

document.addEventListener('DOMContentLoaded', function(){


  const forms = document.querySelectorAll('form'); //

  forms.forEach(form => {

    //Itera sobre cada formulario
    form.addEventListener('submit', function(e){


      e.preventDefault();

      const url = this.action; //Obtiene la ruta a donde van los datos del formulario
      const formData = new FormData(this);
      const row = this.closest('tr'); //encuentra la fila mas cercana a el formulario
      const csrf = this.querySelector('input[name="_token"]')


      fetch(url, {
        method: 'POST',
        body:formData,
        headers:{
          'X-Request-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN' : csrf,
        }

      })

      .then(response => response.json()) //espera la respuesta json
      .then(data =>{

        if(data.success){
          
          const statusCell = row.querySelector('td:nth-child(3)') //selecciona la celda de 'estado' en la fila
          statusCell.textContent = data.status ? 'Autorizado' : 'No autorizado';


          const authorizeButton = row.querySelector('.btn-success'); // encuentra el boton de autorizar
          const desauthorizedButton = row.querySelector('.btn-danger'); //encuentra el boton de desautorizar


          //Si el estado es 'Autorizado'
          if(data.status){

            //cambia el boton de autorizar a gris y lo deshabilita
            authorizeButton.classList.add('btn-secondary');
            authorizeButton.classList.remove('btn-success');
            authorizeButton.setAttribute('disable', true);



          }





        }


      })





    });



  });



});


</script>
  







@endsection