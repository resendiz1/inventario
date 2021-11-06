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
                    @if (session('agregada'))
                        <div class="alert-success font-weight-bold mt-3 p-3">
                           <i class="fa fa-check-circle mr-2"></i>  {{session('agregada')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12">
            <form action="{{route('pc.create')}}" method="POST" enctype="multipart/form-data" class="mt-5 bg-white p-2 shadow rounded">
                @csrf
                <div class="row   m-lg-5 m-sm-2 p-lg-4 p-sm-0">
                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
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
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror

                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Marca</label>
                            <input type="text" value="DELL" class="form-control form-control-sm" name="marca">

                            @error('marca')
                            <div class="alert alert-danger alert-sm p-1">
                               {{$message}}
                            </div>
                            @enderror 

                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Modelo</label>
                            <input type="text" value="Inspiron 2020" class="form-control form-control-sm" name="modelo">

                            @error('modelo')
                            <div class="alert alert-danger alert-sm p-1">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Pulgadas de pantalla</label>
                            <input type="number" min="14" value="24" class="form-control form-control-sm" name="pulgadas">
                           
                            @error('pulgadas')
                                <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">¿Es Touch?</label>
                            <select name="touch" id="" class="form-control">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            
                            @error('touch')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Sistema Operativo</label>
                            <input type="text"  class="form-control form-control-sm" value="windows 10 64bits" name="so">
                        
                            @error('so')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Procesador</label>
                            <input type="text"  class="form-control form-control-sm" value="Core I7 9na " name="procesador">
                            
                            @error('procesador')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>        
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Usuario</label>
                            <input type="text" class="form-control form-control-sm" value="Lorena Dominguez" name="usuario">

                            @error('usuario')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Dirección IP</label>
                            <input type="text" value="192.168.0.20" class="form-control form-control-sm" name="ip">

                            @error('ip')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Dirección MAC</label>
                            <input type="text" value="00:00:00:00:00:00" class="form-control form-control-sm" name="mac">
                            
                            @error('mac')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tipo</label>
                            <input type="text" value="AIO" class="form-control form-control-sm" name="tipo">
                            
                            @error('tipo')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" value="DKFJHGI534" class="form-control form-control-sm" name="serie">
                        
                        @error('serie')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                            </div>    
                        @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Frecuencia de RAM en MHZ</label>
                            <input type="text" class="form-control form-control-sm" value="2000" name="frecuencia_ram">
                            
                            @error('frecuencia_ram')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                       
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">DIMM o SODIMM</label>
                            <select name="tipo_ram" id="" class="form-control form-control-sm">
                                <option value="dimm">DIMM</option>
                                <option value="sodimm">SODIMM</option>
                            </select>

                            @error('tipo_ram')
                                <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                    {{$message}}
                                </div>
                            @enderror
                        
                        </div>
                    </div>

                    
                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tamaño de HDD en GB</label>
                            <input type="number" min="20" value="300" name="size_hdd" class="form-control form-control-sm font-weight-bold">
                            @error('size_hdd')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tamaño de SSD en GB</label>
                            <input type="number" min="20" value="250" name="size_ssd" class="form-control form-control-sm font-weight-bold">
                            
                            @error('size_ssd')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                       
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 1 RAM GB</label>
                            <input type="number" min="0" value="3" name="slot1_ram" class="form-control form-control-sm font-weight-bold">

                            @error('slot1_ram')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 2 RAM GB</label>
                            <input type="number" min="0" value="0" name="slot2_ram" class="form-control form-control-sm font-weight-bold">
                            @error('slot2_ram')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 3 RAM GB</label>
                            <input type="number" min="0" value="2" name="slot3_ram" class="form-control form-control-sm font-weight-bold">
                            
                            @error('slot3_ram')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                       
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Slot 4 RAM GB</label>
                            <input type="number" value="3" min="0" name="slot4_ram" class="form-control form-control-sm font-weight-bold">

                            @error('slot4_ram')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen1" class="form-control font-weight-bold">
                            <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid mt-2" alt="">
                            @error('imagen1')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen2" class="form-control font-weight-bold">
                            <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid mt-2" alt="">
                            @error('imagen2')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen3" class="form-control font-weight-bold">
                            <img src="img/mini-pc-xcy-x41-2105455.jpg" class="img-fluid mt-2" alt="">
                            @error('imagen3')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
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