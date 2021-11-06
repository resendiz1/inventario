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
                EPSON   
            </h1>
        </div>

        <div class="col-12 text-center">
            <h4 class="font-weight-bold">
                L5100
            </h4>
        </div>

    </div>

    <div class="row mt-3 justify-content-center">

        <div class="col-12">
            <div class="row">
                
                <div class="col-6 h5 text-center">
                    <strong>
                       Laser o Tinta:   
                    </strong>
                        Tinta
                </div>

                
                <div class="col-6 h5 text-center">
                    <strong>
                       Número Serie:   
                    </strong>
                        SDF6D5DSFSDF45
                </div>



                <div class="col-12 h5">
                    <strong>
                        Observaciones:
                    </strong>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam alias ipsum nulla dolorum illum, ut, dolorem libero non blanditiis facilis est minus saepe, labore quidem quo aliquam officia necessitatibus ea.
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
                    <img class="d-block w-100" src="https://blog.soltekonline.com/content/images/2021/02/Best-Custom-PC-Builders.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://m.media-amazon.com/images/I/819XYUimTuL._AC_SL1500_.jpg" alt="Second slide">
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