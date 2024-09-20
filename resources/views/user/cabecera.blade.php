<div class="container-fluid bg-light fixed-top cascadia">
    <div class="row">
        
        <div class="col-sm-12 col-md-10 col-lg-9 font-weight-bold border-bottom p-2 ">
           With <i class="fa fa-heart animate__heartBeat"></i> by: <a href="https://github.com/resendiz1" target="_blank" >Arturo Resendiz</a>
        </div>

        <div class="col-sm-12 col-md-2 col-lg-3 text-right border-bottom pt-2">
            <form action="{{route('cerrar.session')}}" method="POST">
                @csrf
                <button  class="btn btn-light btn-sm "> <i class="fa fa-power-off"></i> Cerrar sesión</button>
            </form>
        </div>

    </div>
</div>
    

<div class="container-fluid">

    <div class="row mt-5 mb-2 justify-content-center">

        <div class="col-sm-12 col-md-12 col-lg-4 bg-white shadow shadow-sm mx-1 p-3 py-4 border border-5">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h3 class="m-0 p-0">  {{Auth::user()->name}} </h3>
                    <h5>{{Auth::user()->puesto}}</h5>
                </div>

                <div class="col-12  text-center ">
                    <span>{{Auth::user()->email}}</span>
                </div>

                <div class="col-12  text-center">
                    <span>{{Auth::user()->planta}}</span>
                </div>

            </div>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-7 bg-white shadow shadow-sm  p-3  text-center">
            <div class="row">
                <div class="col-12">
                    <h3><u> Menú </u> </h3>
                </div>
            </div>
            <div class="row  mt-2 justify-content-center">

                <div class="col-sm-2 col-md-4 col-lg-2 text-center  zoom_menu">
                    <a href="{{route('perfil.user')}}" >
                        <i class="fa-solid fa-computer fa-2x {{ Request::is('user') ? 'negro font-weight-bold' : '' }} "></i>
                        <h5 class="{{ Request::is('user') ? 'negro font-weight-bold' : '' }}">Dispositivos</h5>
                        <span class="badge badge-notification">3</span> <!-- Badge de notificación -->
                    </a>
                </div>

                
                <div class="col-sm-2 col-md-4 col-lg-2 text-center pt-2 zoom_menu">
                    <a href="{{route('directorio.show')}}">
                        <i class="fa-solid fa-book fa-2x  {{request()->path() == 'user/directorio' ? 'negro' : '' }}"></i>
                        <h5 class="{{request()->path() == 'user/directorio' ? 'negro font-weight-bold' : '' }}">Directorio</h5>
                    </a>
                </div>

                <div class="col-sm-2 col-md-4 col-lg-2 text-center pt-2 zoom_menu">
                    <a href="{{route('tintas.show')}}" >
                        <i class="fa-solid fa-palette fa-2x {{request()->path() == 'user/tintas' ? 'negro' : '' }}  "></i>
                        <h5 class="{{request()->path() == 'user/tintas' ? 'negro font-weight-bold' : '' }}">Tintas</h5>
                    </a>
                </div>

                <div class="col-sm-2 col-md-4 col-lg-2 text-center pt-2 zoom_menu">
                    <a href="{{route('tickets.show')}}" >
                        <i class="fa-solid fa-laptop-medical fa-2x  {{ Request::is('user/tickets*') ? 'negro font-weight-bold' : '' }} "></i>
                        <h5 class="{{ Request::is('user/tickets*') ? 'negro font-weight-bold' : '' }}">Reportes</h5>
                    </a>
                </div>

                @if (Auth::user()->jefe)
                    <div class="col-sm-4 col-md-4 col-lg-2 text-center pt-2 zoom_menu">
                        <a href="{{route('permisos.show')}}" >
                            <i class="fa-solid fa-users-rectangle fa-2x {{ Request::is('user/permisos') ? 'negro font-weight-bold' : '' }} "></i>
                            <h5 class="{{ Request::is('user/permisos') ? 'negro font-weight-bold' : '' }}">Permisos</h5>
                        </a>
                    </div>
                    
                @endif

               

            </div>
        </div>
    </div>
 </div> {{-- este div cierra todo el cabezote --}}


