@extends('layout')
@section('title', 'Agregando PC')


@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center p-3 mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-4 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <img src="img/logo.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 text-center pt-4">
                    <h2 class="text-center titulos">
                        Agregar equipo de computo
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-12">
            <form action="{{route('pc.create')}}" method="POST" class="mt-5 bg-white p-2 shadow-lg">
                @csrf
                <div class="row   m-lg-5 m-sm-2 p-lg-4 p-sm-0">
                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <label for="" class="font-weight-bold">Area de trabajo</label>
                        <select name="area" id="" class="form-control form-control-sm">
                            <option value="1">RH</option>
                            <option value="2" >Seguridad e higiene</OPtion>
                        </select>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Marca</label>
                            <input type="text" value="DELL" class="form-control form-control-sm" name="marca">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Modelo</label>
                            <input type="text" value="Inspiron 2020" class="form-control form-control-sm" name="modelo">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Pulgadas de pantalla</label>
                            <input type="number" min="14" value="24" class="form-control form-control-sm" name="pulgadas">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">¿Es Touch?</label>
                            <select name="touch" id="" class="form-control">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Sistema Operativo</label>
                            <input type="text"  class="form-control form-control-sm" value="windows 10 64bits" name="so">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Procesador</label>
                            <input type="text"  class="form-control form-control-sm" value="Core I7 9na " name="procesador">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Usuario</label>
                            <input type="text" class="form-control form-control-sm" value="Lorena Dominguez" name="usuario">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Dirección IP</label>
                            <input type="text" value="192.168.0.20" class="form-control form-control-sm" name="ip">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Dirección MAC</label>
                            <input type="text" value="00:00:00:00:00:00" class="form-control form-control-sm" name="mac">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tipo</label>
                            <input type="text" value="AIO" class="form-control form-control-sm" name="tipo">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" value="DKFJHGI534" class="form-control form-control-sm" name="serie">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Frecuencia de RAM en MHZ</label>
                            <input type="text" class="form-control form-control-sm" value="2000" name="frecuencia_ram">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">DIMM o SODIMM</label>
                            <select name="tipo_ram" id="" class="form-control">
                                <option value="dimm">DIMM</option>
                                <option value="sodimm">SODIMM</option>
                            </select>
                        </div>
                    </div>

                    
                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tamaño de HDD en GB</label>
                            <input type="number" min="20" value="300" name="size_hdd" class="form-control form-control-sm font-weight-bold">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tamaño de SSD en GB</label>
                            <input type="number" min="20" value="250" name="size_ssd" class="form-control form-control-sm font-weight-bold">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 1 RAM GB</label>
                            <input type="number" min="0" value="3" name="slot1_ram" class="form-control form-control-sm font-weight-bold">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 2 RAM GB</label>
                            <input type="number" min="0" value="0" name="slot2_ram" class="form-control form-control-sm font-weight-bold">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 3 RAM GB</label>
                            <input type="number" min="0" value="2" name="slot3_ram" class="form-control form-control-sm font-weight-bold">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 4 RAM GB</label>
                            <input type="number" value="3" min="0" name="slot4_ram" class="form-control form-control-sm font-weight-bold">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen1" class="form-control font-weight-bold">
                            <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid mt-2" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen2" class="form-control font-weight-bold">
                            <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid mt-2" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen3" class="form-control font-weight-bold">
                            <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid mt-2" alt="">
                        </div>
                    </div>

                    <div class="col-12  text-center">
                        <button class="btn btn-success btn-block font-weight-bold">
                            <i class="fa fa-plus-circle mr-2 "></i>
                            Agregar
                        </button>
                    </div>
         

                </div>
            </form>
        </div>
    </div>
</div>
@endsection