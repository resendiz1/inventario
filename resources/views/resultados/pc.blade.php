@extends('layout')
@section('content')
@section('title', 'Resultados de PC')


    <div class="container bg-white mt-5 shadow p-3">
        <div class="row pt-3">

            <div class="col-6">
                <button class="btn btn-danger btn-sm rounded-pill">
                    <i class="fa fa-eraser "></i>
                </button>

                <button class="btn btn-primary   btn-sm rounded-pill">
                    <i class="fa fa-edit "></i>
                </button>
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-center mt-2">
                <h3 class="font-weight-bold text-primary">
                    Recursos Humanos
                </h3>
            </div>

            <div class="col-12 text-center">
                <h4 class="font-weight-bold">
                    Lorena Dominguez Dominguez
                </h4>
            </div>

            <div class="col-12 text-center">
                <h1 class="font-weight-bold">
                    Dell
                </h1>
            </div>

            <div class="col-12 text-center">
                <h4 class="font-weight-bold">
                    Inspiron 2020
                </h4>
            </div>
 
        </div>

        <div class="row mt-3">

            <div class="col-7">
                <div class="row">


                    <div class="col-6 h5">
                        <strong>
                            Tamaño de pantalla :
                        </strong>
                        22"
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Es touch:
                        </strong>
                        Si
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            S. O.:
                        </strong>
                        Windows 10 pro
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Dirección IP:
                        </strong>
                        192.168.20.250
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Dirección MAC:
                        </strong>
                        00:00:00:00:00
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Tipo:
                        </strong>
                        Escritorio AIO
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Número Serie:   
                        </strong>
                        SDF6D5DSFSDF45
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Frecuencia de RAM (MHz):   
                        </strong>
                        1600 mhz
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            DIMM O SODIMM:   
                        </strong>
                        DIMM
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Tamaño del HDD:   
                        </strong>
                            1000GB
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Tamaño del SSD:   
                        </strong>
                        240 GB
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Slot 1 de RAM:   
                        </strong>
                        2 GB
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Slot 2 de RAM:   
                        </strong>
                        4 GB
                    </div>

                    <div class="col-6 h5">
                        <strong>
                          Slot 3 de RAM:   
                        </strong>
                        0 GB
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Slot 4    
                        </strong>
                        0 GB
                    </div>

                    <div class="col-12 h5">
                        <strong>
                            Procesador:
                        </strong>
                        Intel Core i3 11va generación
                    </div>


                </div>
            </div>







            <div class="col-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://blog.soltekonline.com/content/images/2021/02/Best-Custom-PC-Builders.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://m.media-amazon.com/images/I/819XYUimTuL._AC_SL1500_.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://assets.spartangeek.com/cc/inwin-309-neg-05.png" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

{{-- 
            <div class="col-12 m-4">
                <div class="row justify-content-center">
                    <div class="col-6 text-center">
                        <button class="btn btn-danger">
                            Dar de baja del inventario
                        </button>    
                    </div>
                    <div class="col-6 text-center">
                        <button class="btn btn-warning">
                            Editar
                        </button>
                    </div>
                </div>
            </div> --}}




        </div>
    </div>





@endsection