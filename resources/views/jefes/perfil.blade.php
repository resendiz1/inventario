@extends('layout')
@section('contenido')
@section('title', 'Empleado con subordinados') 
@include('user.cabecera')



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
          <h3 class="font-weight-bold">Sitios solicitado por las personas a su cargo</h3>
            <table class="table table-bordered table-responsive-md">

              @if (count($sitios) > 0)
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
        
              @forelse ($sitios as $sitio)

              @if ($sitio->user->id  == Auth::user()->id)
                  
              @else
                  
              
              <tr>
                    <td>{{$sitio->user->name}}</td>
                    <td>{{$sitio->nombre}}</td>
                    <td>{{$sitio->status ? 'Autorizado' : 'No autorizado'}}</td>
                    <td>{{$sitio->justificacion}}</td> 
                    
                    <td class="col-2">
                      <div class="btn-group">
                        <form action="{{route('autorizar.software.jefe', $sitio->id)}}" method="POST">
                          @csrf @method('PATCH')                            
                          <button class="btn btn-sm {{$sitio->status ? 'btn-secondary' : 'btn-success' }} " {{$sitio->status  ? 'disabled' : 'enable' }}>
                            <i class="fa fa-check"></i>
                          </button>
                        </form>

                        <form action="{{route('desautorizar.software.jefe', $sitio->id)}}" method="POST">
                          @csrf @method('PATCH')
                          <button class="btn  btn-sm {{$sitio->status ? 'btn-danger' : 'btn-secondary' }}" {{!$sitio->status  ? 'disabled' : 'enable' }}>
                            <i class="fa fa-xmark"></i>
                          </button>
                        </form>
                        
                      </div>
                    </td>
                    
                  </tr>
                  
                  @endif

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

              @if ($software->user->id == Auth::user()->id)



              @else
            
              <tr>
                  <td>{{$software->user->name}}</td>
                  <td>{{$software->nombre}}</td>
                  <td>{{$software->status ? 'Autorizado' : 'No autorizado'}}</td>
                  <td>{{$software->justificacion}}</td> 
                  
                  <td class="col-2">
                    <div class="btn-group">
                      <form action="{{route('autorizar.software.jefe', $software->id)}}" method="POST">
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
              @endif
                
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








@endsection