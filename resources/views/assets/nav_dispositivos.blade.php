<div class="container-fluid p-2 mt-5">
    <div class="row justify-content-around">
      <div class="col-2 text-center bg-primary d-flex align-item-center text-white p-3 rounded">
        <i class="fa fa-computer mx-3 fa-2x"></i>
        <a href="{{route('lista.computadoras')}}" class="text-white h3">
            Computadoras
        </a>
      </div>
      <div class="col-2 text-center bg-dark d-flex align-item-center text-white p-3 rounded">
        <i class="fa fa-print mx-3 fa-2x"></i>
        <a href="{{route('lista.impresoras')}}" class="text-white h3">
            Impresoras
        </a>
      </div>
      <div class="col-2 text-center bg-success align-item-center text-white p-3 rounded">
        <i class="fa fa-phone mx-3 fa-2x"></i>
        <a href="{{route('lista.telefonos')}}" class="text-white h3">
            Telefonos
        </a>
      </div>
    </div>
</div>