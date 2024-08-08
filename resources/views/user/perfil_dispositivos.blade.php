@extends('layout')
@section('contenido')
@include('user.cabecera')
<div class="container-fluid">

    <div class="row">
        <div class="col-12  text-center">
            <h2>Dispositivos</h2>
        </div>
    </div>
    
    <div class="row justify-content-center">


        <div class="col-2 bg-white shadow shadow-sm mx-4 p-5">
            <div class="row">
                <div class="col-12">
                    <h3>Computadora</h3>
                </div>
                <div class="col-auto m-1">
                    <span><b> Marca: </b> Lenovo</span>
                </div>
                <div class="col-auto m-1">
                    <span><b> Modelo: </b> ThinkPad</span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Sistema Operativo : </b> Windows 10</span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Tamaño HDD : </b> 1000 GB </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Tipo : </b> Escritorio </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Tamaño SSD : </b> 1000 GB </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Modelo : </b> Inspiron 5400 </span>
                </div>
            </div>
        </div>


        <div class="col-2 bg-white shadow shadow-sm mx-4 p-5">
            <div class="row">
                <div class="col-12">
                    <h3>Impresora</h3>
                </div>
                <div class="col-auto m-1">
                    <span><b> Marca: </b> Epson</span>
                </div>
                <div class="col-auto m-1">
                    <span><b> Modelo: </b> L4150</span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Serie : </b> HELPOD12415245S </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Tipo : </b> Tinta</span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Observaciones : </b> Lorem s. </span>
                </div>
            </div>
        </div>

        <div class="col-2 bg-white shadow shadow-sm mx-4 p-5">
            <div class="row">
                <div class="col-12">
                    <h3>Teléfono</h3>
                </div>
                <div class="col-auto m-1">
                    <span><b> Marca: </b> Panasonic</span>
                </div>
                <div class="col-auto m-1">
                    <span><b> Modelo: </b> KX-HDDCDDSSDF</span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Serie : </b> HELPOD12415245S </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Tipo : </b> Linea </span>
                </div>
                <div class="col-auto m-1">
                    <span><b>Observaciones : </b> Lorem  </span>
                </div>
            </div>
        </div>



    </div>



 </div>

@endsection