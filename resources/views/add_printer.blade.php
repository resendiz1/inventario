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
                    <h1 class="text-center titulos">
                        Agregar Impresora
                    </h1>
                    @if (session('agregado'))
                    <div class="alert-success font-weight-bold mt-3 p-3">
                        <i class="fa fa-check-circle mr-2"></i>  
                        {{session('agregado')}}
                     </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12">
            <form action="{{route('printer.create')}}" method="POST" enctype="multipart/form-data" class="mt-5 bg-white p-lg-4 p-sm-1 shadow-lg ">
                @csrf
                <div class="row d-flex justify-content-center  p-lg-4 p-sm-1 m-2">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="" class="font-weight-bold">Area de trabajo</label>
                        <select name="area" id="" class="form-control form-control-sm">
                            <option value="Recursos humanos">Recursos Humanos</option>
                            <option value="Seguridad e higiene" >Seguridad e higiene</option>
                            <option value="Sistemas">Área de sistemas</option>
                            <option value="Compras">Compras</option>
                            <option value="Ventas pecuarios">Ventas pecuarios</option>
                            <option value="Ventas mascotas">Ventas mascotas</option>
                            <option value="Calidad y aseguramiento">Calidad y aseguramiento</option>
                            <option value="Servicarga facturación">Servicarga facturación</option>
                            <option value="Servicarga monitoreo">Servicarga monitoreo</option>
                            <option value="Servicarga contabilidad">Servicarga contabilidad</option>
                            <option value="Epaques planta pecuarios">Empaques planta pecuarios</option>
                            <option value="Producción planta pecuarios">Producción pecuarios</option>
                            <option value="Almacén planta pecuarios">Almacén planta pecuarios</option>
                            <option value="Empaques planta mascotas">Empaques planta mascotas</option>
                            <option value="Producción planta mascotas">Producción planta mascotas</option>
                        </select>
                        @error('area')
                            <div class="alert alert-danger font-weight-bold p-1">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Marca</label>
                            <input type="text" name="marca" value="Epson" class="form-control form-control-sm">
                            @error('marca')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Modelo</label>
                            <input type="text" name="modelo" value="L122" class="form-control form-control-sm">
                            @error('modelo')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Laser o Tinta</label>
                            <select name="tipo" id="" class="form-control form-control-sm">
                                <option value="laser">
                                    Laser
                                </option>
                                <option value="tinta">
                                    Tinta
                                </option>
                            </select>

                            @error('tipo')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" name="serie" class="form-control form-control-sm" value="SDFDSF35436">
                            @error('serie')
                                <div class="alert alert-danger p-1 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Observaciones</label>
                            <textarea name="observaciones" class="form-control form-control-sm" id="" cols="30" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptates repudiandae fugit eius? Doloremque, fugit hic ipsam nihil amet eligendi obcaecati harum voluptatibus quibusdam voluptates provident nam sunt beatae voluptas?
                            </textarea>
                            @error('observaciones')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <input type="file" class="form-control font-weight-bold mt-5" name="imagen1">
                            @error('imagen1')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <input type="file" class="form-control font-weight-bold mt-5" name="imagen2" >
                            @error('imagen2')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <button class="btn btn-success btn-block font-weight-bold">
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