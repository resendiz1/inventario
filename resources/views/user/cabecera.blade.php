
    
<div class="container-fluid">

    <div class="row p-5 justify-content-center">

        <div class="col-6 bg-white shadow shadow-sm mx-1 p-4">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h3>{{Auth::user()->name}}</h3>
                </div>
                <div class="col-3">
                    <b>Email: </b> <br>
                   <span>{{Auth::user()->email}}</span>
                </div>
                <div class="col-3">
                    <b>Planta : </b> <br>
                    <span>Planta {{Auth::user()->planta}}</span>
                </div>
                <div class="col-3">
                    <b>Ubicación: </b> <br>
                    <span>{{Auth::user()->ubicacion}}</span>
                </div>
                <div class="col-3">
                    <b>Puesto: </b> <br>
                    <span>{{Auth::user()->puesto}}</span>
                </div>
            </div>
        </div>


        <div class="col-4 bg-white shadow shadow-sm mx-1 p-4 ">
            <div class="row d-flex justify-content-around mt-2">
                <div class="col-4 text-center pt-2">
                    <a href="#">
                        <i class="fa-solid fa-palette fa-2x"></i>
                        <h3>Tintas</h3>
                    </a>
                </div>
                <div class="col-4 text-center pt-2">
                    <a href="#">
                        <i class="fa-solid fa-laptop-file fa-2x"></i>
                        <h3>Tickets</h3>
                    </a>
                </div>
                <div class="col-4 text-center pt-2">
                    <a href="#">
                        <i class="fa-solid fa-computer fa-2x"></i>
                        <h3>Dispositivos</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
 </div> {{-- este div cierra todo el cabezote --}}


