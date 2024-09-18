@extends('layout')
@section('contenido')
@section('title', 'Control de Accesos')
@include('user.cabecera')


<div class="container">
    <div class="row m-1">
        <div class="col-12 text-center font-weight-bold p-3">
            <a href="{{route('perfil.user')}}">
              <i class="fa fa-arrow-left" ></i>
              Volver
            </a>
        </div>

        <div class="col-12 h4 text-center">
        {{-- notificacion --}}
                @if (session('solicitado'))
                    <span class="text-success"> {{session('solicitado')}} </span>
                @endif
        {{-- notificacion --}}
        </div>

    </div>
</div>

    
<div class="container bg-white  p-2 ">

  <!-- encabezado -->
  <div class="container px-5 py-2 m-3 ">
    <div class="row border border-5 justify-content-center">
      
      <div class="col-sm-12 col-md-4  col-lg-4 centrar-verticalmente p-2 mt-2">
        <img src="{{asset('img/logo.png')}}" class="mx-auto img-fluid" alt="">
      </div>
      
      <div class="col-sm-12 col-md-4 col-lg-4 border mt-2"> 
        <div class="row text-center border">
          <div class="col-12 text-center">
            <h3>FORMATO</h3>
          </div>
        </div>
        
        <div class="row mt-3">
          <div class="col-12 text-center">
            <span>
              SOLICITUD DE ALTA / MODIFICACÓN DE ACCESOS A USUARIOS DE TI
            </span>
          </div>
        </div>
      </div>
  
      <div class=" col-sm-12 col-md-4 col-lg-4 border mt-2">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Código</div>
          <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >FO/GP/SIS/005/01</div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Versión</div>
          <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >02</div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Vigencia</div>
          <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >
            ENERO 2026</div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Página</div>
          <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >1 de 1</div>
        </div>
  
      </div>
    
    </div>
  </div>
  <!-- encabezado -->



  

  <div class="container mt-5 p-3"> {{-- cuerpo de el formato --}}
    
    <div class="row font-size-18 justify-content-center">

        <div class="col-4 text-center">
            <b>Fecha: </b> <span> {{Auth::user()->created_at}} </span>
        </div>

        <div class="col-4 text-center">
            <b>Área de trabajo: </b> <span>{{{Auth::user()->puesto}}}</span>
        </div>

        <div class="col-4 text-center">
            <b>Titular: </b> <span>{{Auth::user()->name}}</span>
        </div>

    </div>





    <div class="row justify-content-center mt-5">
        <div class="col-11 ">
            <h4>Software requerido</h4>
            <table class="table border">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col-2">Software</th>
                    <th scope="col-8">Justificación</th>
                    <th scope="col-2">Estado</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($software as $soft)

                    <tr>
                      <th class="col-2" >{{$soft->nombre}}</th>
                      <td class="col-8"> {{$soft->justificacion}} </td>
                      <td class="col-2"> {{$soft->status ? 'Autorizado' : 'No autorizado' }} </td>
                    </tr>
                        
                    @empty
                        <li>No hay datos</li>
                    @endforelse

                  <tr>

                    <th scope="row d-flex items-align-center">
                        <form action="{{route('peticion.software')}}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <label for="">Software: </label>
                                <input type="text" placeholder="Aspel SAE" name="software" value="{{old('software')}}" class="form-control form-control-sm mt-3 suave"> <br>
                                {!!$errors->first('software', '<small class="text-danger"> :message </small>')!!}
                            </div>
                        </th>
                        
                        <td>
                            <div class="form-group ">
                                <label for="" class="font-weight-bold">Justificación: </label>
                                <input type="text" name="justificacion_software" placeholder="Necesito Aspel SAE por que trabajo con los registros de la empresa" class="form-control w-100 h-25 suave mt-2" value="{{old('justificacion_software')}}">
                                {!!$errors->first('justificacion_software', '<small class="text-danger"> :message </small>')!!}<br>
                              </div>
                            </td>
                            
                            <td>
                              
                              <button class="btn btn-dark btn-sm w-100 mt-5" id="button1">Solicitar</button>
                        </form>
                        </td>
                          
                  </tr>
  
                </tbody>
              </table>
        </div>
    </div>






    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-11 ">
            <h4>Acceso a la web requerido</h4>
            <table class="table border">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col-2">Sitio</th>
                    <th scope="col-8">Justificación</th>
                    <th scope="col-2">Estado</th>
                  </tr>
                </thead>
                <tbody>
                
                @forelse ($sitios as $sitio)
                    <tr>
                        <th class="col-2">{{$sitio->nombre}}</th>
                        <td class="col-8" >{{$sitio->justificacion}}</td>
                        <td class="col-2" >{{$sitio->status ? 'Autorizado'  :  'No Autorizado'}}</td>
                    </tr>
                @empty
                    
                @endforelse


                  <th scope="row d-flex items-align-center">
                    <form action="{{route('peticion.sitio')}}" method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="">Sitio: </label>
                            <input type="text" placeholder="DOF (Diario Oficial de la Federación)" name="sitio" value="{{old('sitio')}}" class="form-control form-control-sm mt-3 suave"> <br>
                            {!!$errors->first('sitio', '<small class="text-danger"> :message </small>')!!}
                            <input type="hidden" name="id_jefe" value="{{Auth::user()->jefe}}" >
                        </div>
                  </th>
                    
                      <td>
                        <div class="form-group ">
                            <label for="" class="font-weight-bold">Justificación: </label>
                            <input name="justificacion_sitio" placeholder="Consulto diariamente este sitio saber el tipo de cambio" class="form-control w-100 mt-2 h-25 suave" value="{{old('justificacion_sitio')}}""> 
                            {!!$errors->first('justificacion_sitio', '<small class="text-danger"> :message </small>')!!}<br>
                          </div>
                        </td>
                        
                        <td>
                          
                          <button class="btn btn-dark btn-sm mt-5 w-100" id="button2">Solicitar</button>
                        </form>
                      </td>


                </tbody>
              </table>
        </div>
    </div>    



{{-- ESTO ES EL GRUPO DE BOTONOS QUE DICEN SI ACEPTA EL USUARIO, JEFE DIRECTO Y SISTEMAS --}}
    {{-- <div class="row justify-content-center mt-4">
        <div class="col-3 text-center">

            <button class="btn btn-secondary">
                Acepta Encargado de Sistemas
            </button>
            <br>
            <i class="fa fa-warning text-danger fa-2x mt-2"></i>
            <h5>Aún no se acepta por el Encargado de Sistemas</h5>

        </div>
        <div class="col-3 text-center">

            <button class="btn btn-secondary">
                Acepta Titular el Equipo
            </button>
            <br>
            <i class="fa fa-warning text-danger fa-2x mt-2"></i>
            <h5>Aún no se acepta por el Titular el Equipo</h5>

        </div>
        <div class="col-3 text-center">

            <button class="btn btn-secondary">
                Acepta Jefe Directo
            </button>
            <br>            
            <i class="fa fa-warning text-danger fa-2x mt-2"></i>
            <h5>Aún no se acepta por el Acepta Jefe Directo</h5>

        </div>
    </div> --}}



  </div> {{-- cuerpo de el formato --}}













</div>







<script>

// document.getElementById('sitio').addEventListener('submit', function(event){
//   event.preventDefault();  //evita el envio tradicional del formulario

//   const formData = new FormData(this);

//   const csrfToken = document.querySelector('input[name="_token"]');


//   //haiendo la peticion ajax

//   fetch(this.action, {
//     method: this.method,  //se usa el metodo que esta en el formulario
//     headers:{
//       'X-CSRF-TOKEN': csrfToken,
//       'Accept': 'application/json'
//     },

//     body:formData

//   })


//   .then(response => response.json()) //convierte la respuesta en json
//   .then(data =>{


//     //notidficacion de que si se armo
//     alert('Se envio correctamente el formulario');

//     console.log(data)
//     .catch(eror=>{

//       //manejoi de error3s
//       alert('Ocurrio un error al manejar el formulario');

//     })


//   })

// });


</script>



{{-- //aqui va a ir el script para lo del scroll --}}

<script>


  document.getElementById('button1').addEventListener('click', function(){

          const posicion = this.getBoundingClientRect().top + window.scrollY;
          localStorage.setItem('scrollPosition', posicion)


  });

  document.getElementById('button2').addEventListener('click', function(){

        const posicion = this.getBoundingClientRect().top + window.scrollY;
        localStorage.setItem('scrollPosition', posicion)


  });





  window.addEventListener('load', function(){

    const scrollPosition = localStorage.getItem('scrollPosition');
    if(scrollPosition){


      window.scrollTo({
        top: scrollPosition,
        behavior: 'smooth'
    });

      localStorage.removeItem('scrollPosition');
    }

  });











</script>



@endsection