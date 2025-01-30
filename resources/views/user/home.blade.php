@extends('layout')
@section('title', 'Home')
@section('contenido')
@include('user.cabecera')

<div class="container-fluid fade-out" id="content">

    <div class="row justify-content-center">
        <div class="col-7 text-center bg-white shadow-sm py-2">
            <h2 class="font-arimo">Publicaciones</h2>
            <h1>@php
                if(Auth::viaRemember()){
                    return "session recordada";
                }
            @endphp</h1>
        </div>
    </div>


    <div class="row justify-content-around mt-5 mx-2">

        <div class="col-sm-12 col-md-9 col-lg-3 bg-white p-5 border m-1">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="font-maker">Titulo del post</h1>
                </div>
                <div class="col-12">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab voluptas, mollitia, totam laborum sed obcaecati quam enim ex vel consectetur, aut atque quos. Ea omnis optio numquam nobis cum quia.
                </div>

                <div class="col-8 text-center mt-5">
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


        <div class="col-sm-12 col-md-9 col-lg-3 bg-white p-5 border m-1">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="font-maker">Titulo del post</h1>
                </div>
                <div class="col-12">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab voluptas, mollitia, totam laborum sed obcaecati quam enim ex vel consectetur, aut atque quos. Ea omnis optio numquam nobis cum quia.
                </div>

                <div class="col-8 text-center mt-5">
                    <div class="btn-group">
                        <button class="btn btn-danger">
                            <i class="fa fa-heart text-white"></i>
                            80
                        </button>
                        <button class="btn btn-primary">
                            <i class="fa fa-thumbs-up"></i>
                            30
                        </button>
                        <button class="btn btn-secondary">
                            <i class="fa-solid fa-thumbs-down"></i>
                            20
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-12 col-md-9 col-lg-3 bg-white p-5 border m-1">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="font-maker">Titulo del post</h1>
                </div>
                <div class="col-12">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab voluptas, mollitia, totam laborum sed obcaecati quam enim ex vel consectetur, aut atque quos. Ea omnis optio numquam nobis cum quia.
                </div>

                <div class="col-8 text-center mt-5">
                    <div class="btn-group">
                        <button class="btn btn-danger">
                            <i class="fa fa-heart text-white"></i>
                            80
                        </button>
                        <button class="btn btn-primary">
                            <i class="fa fa-thumbs-up"></i>
                            30
                        </button>
                        <button class="btn btn-secondary">
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