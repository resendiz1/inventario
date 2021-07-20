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
            <form action="" class="mt-5 bg-white p-4 shadow-lg ">
                <div class="row d-flex justify-content-center p-lg-4 p-sm-1 m-2">

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="" class="font-weight-bold">Area de trabajo</label>
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="1">RH</option>
                            <option value="2" >Seguridad e higiene</OPtion>
                        </select>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Marca</label>
                            <input type="text" class="form-control form-control-sm" value="Back-Ups">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Modelo</label>
                            <input type="text" class="form-control form-control-sm" value="SR80010">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" class="form-control form-control-sm" value="KJHGK3654FG">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Observaciones</label>
                            <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="13">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus neque vel, eius quisquam, aliquid nemo enim eligendi recusandae, doloremque repudiandae distinctio quidem. Eligendi beatae ipsum consectetur repellat fuga ad dolorum!
                            </textarea>
                        </div>
                    </div> 

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control">
                        </div>
                        <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control">
                        </div>
                        <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control">
                        </div>
                        <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection