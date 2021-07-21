@extends('layout')
@section('title', 'Agregando UPS')
@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center p-3 mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <img src="img/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-4 text-center pt-4">
                    <h2 class="text-center titulos">
                        Agregar UPS
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-12">
            <form action="{{route('ups.create')}}" method="POST" enctype="multipart/form-data" class="mt-5 bg-white p-4 shadow-lg ">
                @csrf
                <div class="row d-flex justify-content-center p-lg-4 p-sm-1 m-2">

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="" class="font-weight-bold">Area de trabajo</label>
                        <select name="area" id="" class="form-control form-control-sm">
                            <option value="1">RH</option>
                            <option value="2" >Seguridad e higiene</OPtion>
                        </select>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Marca</label>
                            <input type="text" name="marca" class="form-control form-control-sm" value="Back-Ups">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Modelo</label>
                            <input type="text" name="modelo" class="form-control form-control-sm" value="SR80010">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" name="serie" class="form-control form-control-sm" value="KJHGK3654FG">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Observaciones</label>
                            <textarea name="observaciones" class="form-control form-control-sm" id="" cols="30" rows="13">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus neque vel, eius quisquam, aliquid nemo enim eligendi recusandae, doloremque repudiandae distinctio quidem. Eligendi beatae ipsum consectetur repellat fuga ad dolorum!
                            </textarea>
                        </div>
                    </div> 

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control" name="imagen1">
                        </div>
                        <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control" name="imagen2">
                        </div>
                        <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control" name="imagen3">
                        </div>
                        <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                        <div class="form-group">
                            <button class="btn btn-success btn-block font-weight-bold">
                                <i class="fas fa-address-card"></i>
                                 Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection