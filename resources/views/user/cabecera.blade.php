
    
<div class="container-fluid">

    <div class="row p-5 justify-content-center">

        <div class="col-sm-12 col-md-12 col-lg-5 bg-white shadow shadow-sm mx-1 p-4 border border-5">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h3 class="m-0 p-0">{{Auth::user()->name}}</h3>
                    <a href="#" class="m-0 p-0"> <i class="fa fa-power-off"></i> Cerrar sesión</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7">
                    <b>Email: </b> <br>
                   <span>{{Auth::user()->email}}</span>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5">
                    <b >Planta : </b> <br>
                    <span>Planta {{Auth::user()->planta}}</span>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-7 mt-2">
                    <b>Ubicación: </b> <br>
                    <span>{{Auth::user()->ubicacion}}</span>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 mt-2">
                    <b>Puesto: </b> <br>
                    <span>{{Auth::user()->puesto}}</span>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-3 bg-white shadow shadow-sm  p-4  text-center">
            <div class="row">
                <div class="col-12">
                    <h3>Menu</h3>
                </div>
            </div>
            <div class="row  mt-2 justify-content-center">
                <div class="col-4 text-center pt-2">
                    <a href="{{route('tintas.show')}}">
                        <i class="fa-solid fa-palette fa-3x"></i>
                        <h3>Tintas</h3>
                    </a>
                </div>
                <div class="col-4 text-center pt-2">
                    <a href="{{route('tickets.show')}}">
                        <i class="fa-solid fa-laptop-file fa-3x"></i>
                        <h3>Tickets</h3>
                    </a>
                </div>
                <div class="col-6 text-center pt-2">
                    <a href="{{route('perfil.user')}}">
                        <i class="fa-solid fa-computer fa-3x"></i>
                        <h3>Dispositivos</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
 </div> {{-- este div cierra todo el cabezote --}}


