<div class="container-fluid">
    <div class="row mt-1 justify-content-around">
        <div class="col-5 col-lg-1 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
            <a href="{{route('home')}}" class="text-white font-weight-bold">
                <i class="fa fa-home text-white mr-2"></i>
                Inicio
            </a>
        </div>

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
            <a href="{{route('add_pc')}}" class="text-white font-weight-bold">
                <i class="fa fa-desktop text-white mr-2"></i>
                Agregar PC
            </a>
        </div>
        
        
        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
            <a href="{{route('add_telefono')}}" class="text-white font-weight-bold">
                <i class="fa fa-charging-station text-white mr-2"></i>
                Agregar Teléfono
            </a>
        </div>

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
            <a href="{{route('add_printer')}}" class="text-white font-weight-bold">
                <i class="fa fa-print text-white mr-2"></i>
                Agregar Impresoras
            </a>
        </div>

        <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-danger rounded-pill">
            <a href="{{route('agregar_usuarios')}}" class="text-white font-weight-bold">
                <i class="fa fa-user text-white mr-2"></i>
                Agregar Usuarios
            </a>
        </div>

    </div>
</div>