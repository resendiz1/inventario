
@extends('layout')
@section('title', 'Buscador')
@section('content')
    
<div class="container-fluid">
    <div class="row pt-5 d-flex justify-content-center">
        <div class="col-12 text-center">
            <img src="img/logo.png" class=" img-fluid" style="width: 200px;" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-9 col-lg-6">
            <label for="" class="h4">
                Buscador
            </label>
            <input 
                type="text" 
                class="form-control form-control-lg rounded-pill shadow-sm border-0" 
                placeholder="busca por: ip, MAC, area, marca o modelo"
                autofocus autocomplete="address-level1">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 h3">
                Resultados:
            </div>
        </div>
        
        <div class="row mt-3 bg-white p-lg-3 p-sm-0 justify-content-around m-0 shadow-lg">
            <div class="col-12 col-lg-5 col-md-6 col-sm-12 shadow-sm border border-success mb-sm-4">
                <h3 class="text-center bg-success text-white">
                    Area de trabajo: <strong>Recursos Humanos</strong>
                </h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Marca: <strong>DELL</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Modelo: <strong>Inspiron 2020</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Pulgadas DE pantalla: <strong>21"</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Usuario: <strong>Lorena Dominguez D.</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        IP:  <strong>192.168.1.20</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Tipo: <strong>AIO</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        # Serie: <strong>JHGJ25145</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        MAC: <strong>DD:DD:DD:DD:DD:DD</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Cantidad de RAM: <strong>8GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Frecuencia RAM: <strong>1600MHZ </strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        S.O.: <strong>Windows 10 Pro</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Procesador: <strong>Core I3 3ra</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Tipo de RAM: <strong>SODIMM</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        ¿Es Touch?: <strong>SI</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        HDD: <strong>500GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        SSD: <strong>0GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Slot 1 de RAM: <strong>2GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Slot 2 de RAM: <strong>2GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Slot 3 de RAM: <strong>2GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                        Slot 4 de RAM: <strong>2GB</strong>
                    </div>
                    <div class="col-auto border p-lg-2 p-sm-1">
                    Tipo de RAM: <strong>DDR4</strong>
                </div>
                <div class="col-auto border p-lg-2 p-sm-1 text-justify">
                    <strong>
                        Observaciones: 
                    </strong>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex doloribus nulla assumenda magni. Sed sint praesentium itaque deserunt eius, amet illum quam? Eaque quisquam doloribus dolores, cum debitis ab inventore.
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 border p-2 text-center">
                    <img src="img/pc.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 border p-2 text-center">
                    <img src="img/pc.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 border p-2 text-center">
                    <img src="img/pc.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 m-1">
                    <button class="btn btn-warning btn-block btn-sm">
                        Editar
                    </button>
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 m-1">
                    <button class="btn btn-danger btn-block btn-sm">
                        Eliminar
                    </button>
                </div>
            </div>
        </div>
        
        
        <div class="col-12 col-lg-5 col-md-6 col-sm-12 shadow-sm border border-success ">
            <h3 class="text-center bg-success text-white">
                Area de trabajo: <strong>Higiene y aseguramiento</strong>
            </h3>
            
            <div class="row d-flex justify-content-center">
                <div class="col-auto border p-2">
                    Marca: <strong>DELL</strong>
                </div>
                <div class="col-auto border p-2">
                    Modelo: <strong>Inspiron 2020</strong>
                </div>
                <div class="col-auto border p-2">
                    Pulgadas DE pantalla: <strong>21"</strong>
                </div>
                <div class="col-auto border p-2">
                    Usuario: <strong>Lorena Dominguez D.</strong>
                </div>
                <div class="col-auto border p-2">
                    IP:  <strong>192.168.1.20</strong>
                </div>
                <div class="col-auto border p-2">
                    Tipo: <strong>AIO</strong>
                </div>
                <div class="col-auto border p-2">
                    # Serie: <strong>JHGJ25145</strong>
                </div>
                <div class="col-auto border p-2">
                    MAC: <strong>DD:DD:DD:DD:DD:DD</strong>
                </div>
                <div class="col-auto border p-2">
                    Cantidad de RAM: <strong>8GB</strong>
                </div>
                <div class="col-auto border p-2">
                    Frecuencia RAM: <strong>1600MHZ </strong>
                </div>
                <div class="col-auto border p-2">
                    S.O.: <strong>Windows 10 Pro</strong>
                </div>
                <div class="col-auto border p-2">
                    Procesador: <strong>Core I3 3ra</strong>
                </div>
                <div class="col-auto border p-2">
                    Tipo de RAM: <strong>SODIMM</strong>
                </div>
                <div class="col-auto border p-2">
                    ¿Es Touch?: <strong>SI</strong>
                </div>
                <div class="col-auto border p-2">
                    HDD: <strong>500GB</strong>
                </div>
                <div class="col-auto border p-2">
                    SSD: <strong>0GB</strong>
                </div>
                <div class="col-auto border p-2">
                    Slot 1 de RAM: <strong>2GB</strong>
                </div>
                <div class="col-auto border p-2">
                    Slot 2 de RAM: <strong>2GB</strong>
                </div>
                <div class="col-auto border p-2">
                    Slot 3 de RAM: <strong>2GB</strong>
                </div>
                <div class="col-auto border p-2">
                    Slot 4 de RAM: <strong>2GB</strong>
                </div>
                <div class="col-auto border p-2">
                    Tipo de RAM: <strong>DDR4</strong>
                </div>
                <div class="col-auto border p-2 text-justify">
                    <strong>
                        Observaciones: 
                    </strong>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex doloribus nulla assumenda magni. Sed sint praesentium itaque deserunt eius, amet illum quam? Eaque quisquam doloribus dolores, cum debitis ab inventore.
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 border p-2 text-center">
                    <img src="img/pc.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 border p-2 text-center">
                    <img src="img/pc.png" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-lg-4 col-md-6 col-sm-6 col-xs-12 border p-2 text-center">
                    <img src="img/pc.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection