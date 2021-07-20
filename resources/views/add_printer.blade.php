@extends('layout')
@section('title', 'Agregando impresora')
@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center p-3 mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 text-center pt-4">
                    <h1 class="text-center">
                        Agregar Impresora
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-12">
            <form action="" class="mt-5 bg-white p-lg-4 p-sm-1 shadow-lg ">
                <div class="row d-flex justify-content-center  p-lg-4 p-sm-1 m-2">

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="" class="font-weight-bold">Area de trabajo</label>
                        <select name="" id="" class="form-control form-control-sm">
                            <option value="1">RH</option>
                            <option value="2" >Seguridad e higiene</OPtion>
                        </select>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Marca</label>
                            <input type="text" value="Epson" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Modelo</label>
                            <input type="text" value="L122" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Laser o Tinta</label>
                            <select name="tipo" id="" class="form-control">
                                <option value="laser">
                                    Laser
                                </option>
                                <option value="tinta">
                                    Tinta
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" class="form-control form-control-sm" value="SDFDSF35436">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Observaciones</label>
                            <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptates repudiandae fugit eius? Doloremque, fugit hic ipsam nihil amet eligendi obcaecati harum voluptatibus quibusdam voluptates provident nam sunt beatae voluptas?
                            </textarea>
                        </div>
                    </div>


                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <input type="file" class="form-control font-weight-bold">
                            <img src="img/pc.png" class="img-fluid" alt="">
                        </div>
                    </div>


                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <input type="file" class="form-control font-weight-bold">
                            <img src="img/pc.png" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection