<div class="container-fluid bg-light ">
    <div class="row">
        <div class="col-12 font-weight-bold border-bottom p-2" style="font-family: cascadia code">
            Desarrollado con <i class="fa fa-heart"></i> by: <a href="https://github.com/resendiz1" target="_blank" >Arturo Resendiz</a>
        </div>
    </div>
</div>
    

<div class="container-fluid">

    <div class="row p-5 justify-content-center">

        <div class="col-sm-12 col-md-12 col-lg-5 bg-white shadow shadow-sm mx-1 p-3 py-4 border border-5">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h3 class="m-0 p-0">  {{Auth::user()->name}} </h3>
                    <h5>{{Auth::user()->puesto}}</h5>
                </div>

                <div class="col-12  text-center ">
                    <span>{{Auth::user()->email}}</span>
                </div>

                <div class="col-12  text-center">
                    <span>Planta {{Auth::user()->planta}}</span>
                </div>

                <div class="col-12 text-center mt-3">
                    <form action="{{route('cerrar.session')}}" method="POST">
                        @csrf
                        <button  class="m-0 p-0 btn btn-light "> <i class="fa fa-power-off"></i> Cerrar sesión</button>
                    </form>
                </div>

            </div>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-6 bg-white shadow shadow-sm  p-3  text-center">
            <div class="row">
                <div class="col-12">
                    <h3><u> Menú </u> </h3>
                </div>
            </div>
            <div class="row  mt-2 justify-content-center">

                <div class="col-sm-6 col-md-6 col-lg-3 text-center pt-2">
                    <a href="{{route('perfil.user')}}">
                        <i class="fa-solid fa-computer fa-2x {{request()->path() == 'user' ? 'negro' : ''}} "></i>
                        <h4>Dispositivos</h4>
                    </a>
                </div>

                
                <div class="col-sm-6 col-md-6 col-lg-3 text-center pt-2">
                    <a href="{{route('directorio.show')}}">
                        <i class="fa-solid fa-book fa-2x {{request()->path() == 'user/directorio' ? 'negro' : '' }}"></i>
                        <h4>Directorio</h4>
                    </a>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 text-center pt-2">
                    <a href="{{route('tintas.show')}}">
                        <i class="fa-solid fa-palette fa-2x {{request()->path() == 'user/tintas' ? 'negro' : '' }}  "></i>
                        <h4>Tintas</h4>
                    </a>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 text-center pt-2">
                    <a href="{{route('tickets.show')}}">
                        <i class="fa-solid fa-laptop-medical fa-2x {{request()->path() == 'user/tickets' ? 'negro' : ''}} "></i>
                        <h4>Reportes</h4>
                    </a>
                </div>

            </div>
        </div>
    </div>
 </div> {{-- este div cierra todo el cabezote --}}


