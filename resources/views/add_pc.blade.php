@extends('layout')
@include('assets.nav')
@section('title', 'Agregando PC')


@section('content')
<div class="container-fluid">

    <div class="row d-flex justify-content-center p-3 mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-4 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    {{-- <img src="{{asset('https://www.logo.wine/a/logo/Linux/Linux-Logo.wine.svg')}}" class="img-fluid w-50" alt=""> --}}
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
            <form action="{{route('pc.create')}}" method="POST" enctype="multipart/form-data" class="mt-5 bg-white p-2 shadow rounded p-4">
                @csrf
                <div class="row   m-lg-5 m-sm-2 p-lg-4 p-sm-0">
                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <label for="" class="font-weight-bold">Area de trabajo</label>
                        <select name="area" id="" class="form-control form-control-sm">
                            <option value="Recursos humanos">Recursos Humanos</option>
                        </select>

                        @error('area')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror

                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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



                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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



                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Usuario</label>
                            <select name="usuario" id="" class="form-control form-control-sm">
                                <option value="Nombre de ususario">Nombre de ususario</option>
                            </select>

                        </div>
                    </div>



                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tipo</label>
                            <select name="area" id="" class="form-control form-control-sm">
                                <option value="AIO">AIO</option>
                                <option value="Escritorio">Escritorio</option>
                            </select>
                            
                            @error('tipo')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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



                    
                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
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



                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tamaño RAM</label>
                            <input type="number" value="3" min="0" name="size_ram" class="form-control form-control-sm font-weight-bold">

                            @error('slot4_ram')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen1" class="imagen form-control font-weight-bold" id="imagen0">
                            <div class="col-12 p-2 shadow" id="previa0">
                                <img class="img-fluid" id="img_tag0" alt="">
                            </div>
                            @error('imagen1')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen2" class="imagen form-control font-weight-bold" id="imagen1">
                            <div class="col-12 p-2 shadow" id="previa1">
                                <img class="img-fluid" id="img_tag1" alt="">
                            </div>
                            @error('imagen2')
                            <div class="alert alert-danger alert-sm p-1 font-weight-bold">
                                {{$message}}
                             </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                        <div class="form-group">
                            <input type="file" min="0" name="imagen3" class="imagen form-control font-weight-bold" id="imagen2">
                            <div class="col-12 p-2 shadow" id="previa2">
                                <img class="img-fluid" id="img_tag2" alt="">
                            </div>
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