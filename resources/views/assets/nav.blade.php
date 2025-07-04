

<div class="container-fluid">
    <div class="row justify-content-around bg-white border border-bottom border-3">



        <div class="col-sm-12 col-md-6 col-lg-1 mt-3 text-center ">
            <a href="{{route('perfil.admin')}}" class=" font-weight-bold">
                <i class="fa fa-desktop  mr-2"></i>
                Inicio
            </a>
        </div>

        
        <div class="col-sm-12 col-md-6 col-lg-1 mt-3 text-center ">
            <a href="{{route('gestionar.publicaciones')}}" class=" font-weight-bold">
                <i class="fa fa-newspaper  mr-2"></i>
                Publicaciones
            </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-1 mt-2 text-center ">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-laptop"></i>
                    Gestionar Dispositivos
                </button>
                <div class="dropdown-menu">

                    <a href="{{route('add_pc')}}" class=" font-weight-bold dropdown-item">
                        <i class="fa fa-desktop  mr-2"></i>
                        Agregar PC
                    </a>

                    <a href="{{route('add_printer')}}" class="dropdown-item font-weight-bold">
                        <i class="fa fa-print  mr-2"></i>
                        Agregar Impresoras
                    </a>

                    <a href="{{route('add.telefono')}}" class="dropdown-item font-weight-bold">
                        <i class="fa fa-charging-station  mr-2"></i>
                        Agregar Teléfono
                    </a>

                    <a href="{{route('lista.dispositivos')}}" class="dropdown-item font-weight-bold">
                        <i class="fa fa-print  mr-2"></i>
                        Lista de dispositivos
                    </a>

                </div>
              </div>
        </div>





        <div class="col-sm-12  col-md-6 col-lg-1  mt-3 text-center">
            <a href="{{route('agregar.usuarios')}}" class=" font-weight-bold">
                <i class="fa fa-user  mr-2"></i>
                 Usuarios
            </a>
        </div>




        


        <div class="col-sm-12 col-md-4 col-lg-1 mt-2 text-center">
            <form action="{{route('cerrar.session.admin')}}" method="POST" id="form-cerrar-session" >
                @csrf
                <button type="submit" id="cerrar_session" class="btn btn-light btn-sm">
                    <i class="fa fa-power-off  mr-2"></i>
                    Cerrar Session
                </button>
            </form>
        </div>




    </div>
</div>


