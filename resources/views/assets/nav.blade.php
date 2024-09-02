

<div class="container-fluid">
    <div class="row justify-content-around bg-white border border-bottom border-3 p-1">

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center ">
            <a href="{{route('perfil.admin')}}" class=" font-weight-bold">
                <i class="fa fa-desktop  mr-2"></i>
                Inicio
            </a>
        </div>

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center ">
            <a href="{{route('add_pc')}}" class=" font-weight-bold">
                <i class="fa fa-desktop  mr-2"></i>
                Agregar PC
            </a>
        </div>
        
        
        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center ">
            <a href="{{route('add.telefono')}}" class=" font-weight-bold">
                <i class="fa fa-charging-station  mr-2"></i>
                Agregar Teléfono
            </a>
        </div>

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center ">
            <a href="{{route('add_printer')}}" class=" font-weight-bold">
                <i class="fa fa-print  mr-2"></i>
                Agregar Impresoras
            </a>
        </div>

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center">
            <a href="{{route('agregar.usuarios')}}" class=" font-weight-bold">
                <i class="fa fa-user  mr-2"></i>
                 Usuarios
            </a>
        </div>
        <div class="col-12 m-2 text-center">
            <form action="{{route('cerrar.session.admin')}}" method="POST" >
                @csrf
                <button type="submit" class="btn btn-light btn-sm">
                    <i class="fa fa-power-off  mr-2"></i>
                    Cerrar Session
                </button>
            </form>
        </div>
    </div>
</div>