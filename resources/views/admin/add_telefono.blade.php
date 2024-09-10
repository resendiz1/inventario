@extends('layout')
@section('title','Agregar impresora')
@include('assets.nav')
@section('contenido')
<div class="container">
    <div class="row d-flex justify-content-center p-3 mt-2">

        <div class="col-12 mt-5 bg-white p-4 shadow-lg">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-center">Agregar teléfono</h2>
                    @if (session('agregado'))
                        <li class="text-success fw-bold text-center">{{session('agregado')}}</li>
                    @endif
                </div>
            </div>
            <form action="{{route('telefono.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row d-flex justify-content-center p-lg-4 p-sm-1 m-2">

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="" class="font-weight-bold mb-0 mt-2">Usuario</label>
                        <select name="usuario"  class="form-control form-control-sm">
                            @forelse ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->name}} | {{$usuario->puesto}}</option>  
                            @empty
                                <li>No hay resultados</li>
                            @endforelse
                        </select>
                        @error('area')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold mb-0 mt-2">Marca</label>
                            <input type="text" value="{{old('marca')}}" name="marca" class="form-control form-control-sm">
                            
                            @error('marca')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold mb-0 mt-2">Modelo</label>
                            <input type="text" value="{{old('modelo')}}" name="modelo" class="form-control form-control-sm">
                            
                            @error('modelo')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">
                            <label for="" class="font-weight-bold mb-0 mt-2">Número de serie</label>
                            <input type="text" name="serie" value="{{old('serie')}}" class="form-control form-control-sm">
                            
                            @error('serie')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror

                        </div>
                    </div>
                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                        <div class="form-group">

                            <select name="tipo" id="" class="form-select form-control">
                                <option value="Linea">Linea</option>
                                <option value="Celular">Celular</option>
                            </select>
                            
                            @error('tipo')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror

                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold mb-0 mt-2">Observaciones</label>
                            <input name="observaciones" value="{{old('observaciones')}}" class="form-control form-control-sm" id="" cols="30" rows="13">
                            @error('observaciones')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div> 

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <input type="file" class="form-control" name="imagen1" id="imagen0">
                        </div>
                        @error('imagen1')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror

                        <div class="col-12 p-3 shadow" id="previa0">
                            <img id="img_tag0" class="img-fluid" alt="">
                        </div>

                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <input type="file" class="imagen form-control" name="imagen2" id="imagen1">
                        </div>
                        @error('imagen2')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <div class="col-12 p-3 shadow" id="previa1">
                            <img id="img_tag1" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <input type="file" class="imagen form-control" name="imagen3" id="imagen2">
                        </div>
                        @error('imagen3')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                        <div class="col-12 p-3 shadow" id="previa2">
                            <img id="img_tag2" class="imagen img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-12 text-start mt-3">
                        <div class="form-group">
                            <button class="btn btn-success font-weight-bold">
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