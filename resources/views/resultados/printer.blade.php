@extends('layout')
@section('content')



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
    <div class="row justify-content-center">
        <div class="col-12 text-center mt-2">
            <h3 class="font-weight-bold text-primary">
               {{$resultado[0]->area}}
            </h3>
        </div>

        <div class="col-12 text-center">
            <h4 class="font-weight-bold">
                {{$resultado[0]->titular}}
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

    <div class="row mt-3 justify-content-center">

        <div class="col-12">
            <div class="row">
                
                <div class="col-6 col-sm-12 col-md-4 col-lg-3 h5 text-center">
                    <strong>
                       Laser o Tinta:   
                    </strong>
                        {{$resultado[0]->tipo}}
                </div>

                
                <div class="col-6 col-sm-12 col-md-4 col-lg-3 h5 text-center">
                    <strong>
                       Número Serie:   
                    </strong>
                        {{$resultado[0]->serie}}
                </div>



                <div class="col-12 col-sm-12 col-md-4 col-lg-6 h5">
                    <strong>
                        Observaciones:
                    </strong>
                    {{$resultado[0]->observaciones}}
                </div>


            </div>
        </div>







        <div class="col-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{Storage::url($resultado[0]->imagen1)}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{Storage::url($resultado[0]->imagen2)}}" alt="Second slide">
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


    </div>
</div>









@endsection