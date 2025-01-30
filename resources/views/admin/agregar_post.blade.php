@extends('layout')
@section('title', 'Genrar Post')
@section('contenido')
@include('assets.nav')   



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 text-center p-3 bg-white shadows m-3 ">
            <h3 class="font-weight-bold titulo_publicaciones">Agregar Publicación</h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-11 bg-white p-5">
            <div class="row">

                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="form-group">
                        <label for="font-weight-bold">Titulo de la publicación: </label>
                        <input type="text" class="form-control" id="titulo">
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="form-group">
                        <label for="font-weight-bold">Categoria: </label>
                        <select name="categoria" id="" class="form-control">
                            <option value="Categoria 1">Categoria 1</option>
                            <option value="Categoria 3">Categoria 3</option>
                            <option value="Categoria 2">Categoria 2</option>
                        </select>
                    </div>
                </div>



                <div class="col-12">
                    <div class="form-group">
                        <label for="font-weight-bold">Parrafo 1: </label>
                        <textarea name="parrafo1" class="form-control"  ></textarea>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="form-group">
                        <label for="">

                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>





@endsection