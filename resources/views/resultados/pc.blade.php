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
                    {{$resultado[0]->area}}
                </h3>
            </div>

            <div class="col-12 text-center">
                <h4 class="font-weight-bold">
                    {{$resultado[0]->usuario}}
                </h4>
            </div>

            <div class="col-12 text-center">
                <h1 class="font-weight-bold">
                    {{$resultado[0]->marca}}
                </h1>
            </div>

            <div class="col-12 text-center">
                <h4 class="font-weight-bold">
                    {{$resultado[0]->modelo}}
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
                        {{$resultado[0]->pulgadas}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Es touch:
                        </strong>
                            {{$resultado[0]->touch}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            S. O.:
                        </strong>
                            {{$resultado[0]->SO}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Dirección IP:
                        </strong>
                            {{$resultado[0]->ip}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Dirección MAC:
                        </strong>
                            {{$resultado[0]->mac}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Tipo:
                        </strong>
                            {{$resultado[0]->tipo}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Número Serie:   
                        </strong>
                            {{$resultado[0]->serie}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Frecuencia de RAM (MHz):   
                        </strong>
                                {{$resultado[0]->frecuencia_ram}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            DIMM O SODIMM:   
                        </strong>
                            {{$resultado[0]->tipo_ram}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Tamaño del HDD:   
                        </strong>
                            {{$resultado[0]->size_hdd}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Tamaño del SSD:   
                        </strong>
                            {{$resultado[0]->size_ssd}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Slot 1 de RAM:   
                        </strong>
                            {{$resultado[0]->slot1_ram}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Slot 2 de RAM:   
                        </strong>
                            {{$resultado[0]->slot2_ram}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                          Slot 3 de RAM:   
                        </strong>
                            {{$resultado[0]->slot3_ram}}
                    </div>

                    <div class="col-6 h5">
                        <strong>
                            Slot 4    
                        </strong>
                            {{$resultado[0]->slot4_ram}}
                    </div>

                    <div class="col-12 h5">
                        <strong>
                            Procesador:
                        </strong>
                        {{$resultado[0]->procesador}}
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
                        <img class="d-block w-100" src="{{Storage::url($resultado[0]->imagen1)}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{Storage::url($resultado[0]->imagen2)}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{Storage::url($resultado[0]->imagen3)}}" alt="Third slide">
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