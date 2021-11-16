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
            <form action="{{route('ups.create')}}" method="POST" enctype="multipart/form-data" class="mt-5 bg-white p-4 shadow-lg ">
                @csrf
                <div class="row d-flex justify-content-center p-lg-4 p-sm-1 m-2">

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
                            <input type="text" name="marca" class="form-control form-control-sm">
                            
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
                            <input type="text" name="modelo" class="form-control form-control-sm" value="SR80010">
                            
                            @error('modelo')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Titular del equipo</label>
                            <input type="text" name="titular" class="form-control form-control-sm" value="Lorena Dominguez Dominguez">
                            
                            @error('titular')
                                <div class="alert alert-danger font-weight-bold p-1">
                                    {{$message}}
                                </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Número de serie</label>
                            <input type="text" name="serie" class="form-control form-control-sm" value="KJHGK3654FG">
                            
                            @error('serie')
                            <div class="alert alert-danger font-weight-bold p-1">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Observaciones</label>
                            <textarea name="observaciones" class="form-control form-control-sm" id="" cols="30" rows="13">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus neque vel, eius quisquam, aliquid nemo enim eligendi recusandae, doloremque repudiandae distinctio quidem. Eligendi beatae ipsum consectetur repellat fuga ad dolorum!
                            </textarea>

                            @error('observaciones')
                            <div class="alert alert-danger font-weight-bold p-1">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div> 

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="form-control" name="imagen1" id="imagen0">
                        </div>
                        @error('imagen1')
                        <div class="alert alert-danger font-weight-bold p-1">
                            {{$message}}
                        </div>
                        @enderror

                        <div class="col-12 p-3 shadow" id="previa0">
                            <img id="img_tag0" class="img-fluid" alt="">
                        </div>

                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="imagen form-control" name="imagen2" id="imagen1">
                        </div>
                        @error('imagen2')
                        <div class="alert alert-danger font-weight-bold p-1">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="col-12 p-3 shadow" id="previa1">
                            <img id="img_tag1" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <input type="file" class="imagen form-control" name="imagen3" id="imagen2">
                        </div>
                        @error('imagen3')
                        <div class="alert alert-danger font-weight-bold p-1">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="col-12 p-3 shadow" id="previa2">
                            <img id="img_tag2" class="imagen img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                        <div class="form-group">
                            <button class="btn btn-success btn-block font-weight-bold">
                                <i class="fas fa-plus-circle"></i>
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