@extends('layout')
@section('title', 'Home')
@section('contenido')
@include('user.cabecera')

<div class="container-fluid fade-out" id="content">

    <div class="row justify-content-center">
        <div class="col-7 text-center bg-white shadow-sm py-2">
            <h2 class="font-arimo">Seguridad Informática</h2>
        </div>
    </div>


    <div class="row justify-content-around mt-5 mx-2">

   

        <div class="col-sm-12 col-md-9 col-lg-2 bg-white shadow m-1">
            <div class="row justify-content-center">
                <div class="col-12 p-0">
                    <img src="/img/seguridad.jpg" class="img-fluid w-100" alt="">
                </div>

                <div class="col-12 m-2">
                    <h1 class="font-maker">Titulo del post</h1>
                </div>

                <div class="col-12">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab voluptas, mollitia, totam laborum sed obcaecati quam enim ex vel consectetur, aut atque quos. Ea omnis optio numquam nobis cum quia.
                </div>

                <div class="col-12 m-3 text-center">
                    <a href="#" class="h5">Ir a la publicación</a>
                </div>

                <div class="col-12 text-center mt-1 p-3">
                    <div class="btn-group">
                        <button class="btn btn-danger d-block">
                            <i class="fa fa-heart text-white"></i>
                            80
                        </button>
                        <button class="btn btn-primary d-block">
                            <i class="fa fa-thumbs-up"></i>
                            30
                        </button>
                        <button class="btn btn-secondary d-block">
                            <i class="fa-solid fa-thumbs-down"></i>
                            20
                        </button>
                    </div>
                </div>

            </div>
        </div>




    </div>





</div>



@endsection    