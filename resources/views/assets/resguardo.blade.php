@extends('layout')
@section('contenido')
@section('title', 'Resguardo')


<!-- encabezado -->
<div class="container bg-white p-3 border shadow">{{--  este es el contenedor de todo --}}


  <div class="container px-5
   py-2 ">
      <div class="row border border-5">
        
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
                ASIGNACIÓN DE DISPOSITIVOS
              </span>
            </div>
          </div>
        </div>
    
        <div class=" col-sm-12 col-md-4 col-lg-4 border mt-2">
          <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 border fw-bold text-center">Código</div>
            <div class="col-sm-6 col-md-8 col-lg-8 border p-0 text-center" >FO/GP/SIS/001/02</div>
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




    <div class="container ">

      <div class="row">
        <div class="col-12 p-2 text-center">
          <h4 class="font-weight-bold ">
            Resguardo de Dispositivos
          </h4>
        </div>
      </div>

  {{-- conjunto de datos del usuario --}}
      <div class="row px-2">
        <div class="col-12 text-center" style="background-color: rgb(213, 232, 226)">
          <h5 class="mt-2 font-weight-bold">Datos del Usuario</h5>
        </div>
      </div>


      <div class="row p-0 justify-content-center">

        <div class="col-4 p-3 font-size-18 text-center">
          <b class="p-0 m-0">Nombre: </b> 
          <span>Arturo Resendiz López</span>
        </div>

        <div class="col-4 p-3 font-size-18 text-center">
          <b class="p-0 m-0">Área: </b> 
          <span>Area de Sistemas</span>
        </div>

        <div class="col-4 p-3 font-size-18 text-center">
          <b class="p-0 m-0">Lugar de trabajo: </b> 
          <span>Planta 1</span>
        </div>

      </div>
  {{-- conjunto de datos del usuario --}}




  {{-- conjunto de dartos del equipo de computo --}}
      <div class="row mt-4 px-2 border-top border-bottom">
        <div class="col-9 text-center" style="background-color: rgb(244, 233, 223)">
          <h5 class="mt-2 font-weight-bold">Datos del Equipo de Cómputo</h5>
        </div>
        <div class="col-3 mt-2">
          <h5>  ¿Equipo Nuevo?  <b> <i class="fa fa-check-circle mx-1"></i> SI</b></h5>
        </div>
      </div>



      <div class="row p-3">

        <div class="col-2 p-1 font-size-18">
          <b class="p-0 m-0">Marca: </b> 
          <span class="font-size-18">DELL</span>
        </div>

        <div class="col-3 p-1 font-size-18">
          <b class="p-0 m-0">Modelo: </b> 
          <span>Inspiron 24 5420</span>
        </div>

        <div class="col-2 p-1 font-size-18">
          <b class="p-0 m-0">RAM: </b> 
          <span>12 GB</span>
        </div>

        <div class="col-2 p-1 font-size-18">
          <b class="p-0 m-0">HDD: </b> 
          <span> 900 GB</span>
        </div>

        <div class="col-2 p-1 font-size-18">
          <b class="p-0 m-0">SSD: </b> 
          <span> 900 GB</span>
        </div>

        <div class="col-2 p-1 font-size-18">
          <b class="p-0 m-0">Tipo: </b> 
          <span>AIO</span>
        </div>

        <div class="col-3 p-1 font-size-18">
          <b class="p-0 m-0">Número de serie: </b> 
          <span>28946SDFS</span>
        </div>

        <div class="col-3 p-1 font-size-18">
          <b class="p-0 m-0">Procesador: </b> 
          <span> Intel Core i5-4570</span>
        </div>


        <div class="col-12 p-1 font-size-18">
          <b class="p-0 m-0">Accesorios: </b> 
          <span>Teclado y Mouse Inhalambricos</span>
        </div>


      </div>
      

  {{-- conjunto de dartos del equipo de computo --}}















  {{-- conjunto de dartos de la impresora --}}
    <div class="row mt-4 px-2 border-top border-bottom">
      <div class="col-9 text-center" style="background-color: rgb(213, 232, 226)">
        <h5 class="mt-2 font-weight-bold">Datos del Equipo de Impresora</h5>
      </div>
      <div class="col-3 mt-2">
        <h5>  ¿Equipo Nuevo?  <b> <i class="fa fa-check-circle mx-1"></i> SI</b></h5>
      </div>
    </div>


    <div class="row p-3">

      <div class="col-2 p-1 font-size-18">
        <b class="p-0 m-0">Marca: </b> 
        <span class="font-size-18">Epson</span>
      </div>

      <div class="col-2 p-1 font-size-18">
        <b class="p-0 m-0">Modelo: </b> 
        <span class="font-size-18">L3150</span>
      </div>

      <div class="col-4 p-1 font-size-18">
        <b class="p-0 m-0">Número de serie: </b> 
        <span class="font-size-18">HKPLKJSDHFKJYEAR</span>
      </div>
      
      <div class="col-3 p-1 font-size-18">
        <b class="p-0 m-0">Tipo: </b> 
        <span class="font-size-18">Tinta</span>
      </div>
    
    </div>
  {{-- cionjunto de datos de la impresora --}}


  {{-- conjunto de datos de el telefono --}}
  <div class="row mt-4 px-2 border-top border-bottom">
    <div class="col-9 text-center" style="background-color: rgb(244, 233, 223)">
      <h5 class="mt-2 font-weight-bold">Datos del Equipo de el Teléfono</h5>
    </div>
    <div class="col-3 mt-2">
      <h5>  ¿Equipo Nuevo?  <b> <i class="fa fa-check-circle mx-1"></i> SI</b></h5>
    </div>
  </div>


  <div class="row p-3">

    <div class="col-3 p-1 font-size-18">
      <b class="p-0 m-0">Marca: </b> 
      <span class="font-size-18">Panasonic</span>
    </div>

    <div class="col-3 p-1 font-size-18">
      <b class="p-0 m-0">Modelo: </b> 
      <span class="font-size-18">KX-HDV130</span>
    </div>

    <div class="col-4 p-1 font-size-18">
      <b class="p-0 m-0">Número de serie: </b> 
      <span class="font-size-18">9LCTI1158207</span>
    </div>

    <div class="col-2 p-1 font-size-18">
      <b class="p-0 m-0">Tipo: </b> 
      <span class="font-size-18">Fijo</span>
    </div>

  </div>





  <div class="row p-3">

    <div class="col-4">
      <img src="https://picsum.photos/300/300" class="img-fluid" alt="">
    </div>

    <div class="col-4">
      <img src="https://picsum.photos/300/300" class="img-fluid" alt="">
    </div>

    <div class="col-4">
      <img src="https://picsum.photos/300/300" class="img-fluid" alt="">
    </div>

  </div>


  <div class="row p-3 justify-content-center">
    <div class="col-8 text-center">

      <h4 class="text-success"> 
        <i class="fa fa-check-circle"></i>
        <b>Aceptado por: </b>   
        Arturo Resendiz López
      </h4>

      <h4 class="text-danger">
        <i class="fa fa-warning"></i>
        Aún no es aceptado por el usuario

      </h4>

    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-3 text-center">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
      Acepto <a href="#">Terminos y condiciones</a>
    </div>
  </div>

  <div class="row p-3 justify-content-center">
    <div class="button-group text-center">
      <button class="btn btn-success">
        <i class="fa fa-check"></i>
        Aceptar
      </button>
      <button class="btn btn-danger">
        <i class="fa fa-xmark"></i>
        Rechazar
      </button>
    </div>
  </div>




  </div>

</div>{{--  este es el contenedor de todo --}}







    
@endsection