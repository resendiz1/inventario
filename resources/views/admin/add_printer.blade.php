@extends('layout')
@section('title', 'Agregando impresora')
@include('assets.nav')
@section('contenido')


<div class="container">
    <div class="row d-flex justify-content-center p-3 mt-2">
        <div class="col-12 mt-5 bg-white p-lg-4 p-sm-1 shadow-lg">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Agregar Impresora</h3>
                    @if (session('agregado'))
                       <li class="text-success fw-bold"> {{session('agregado')}}</li>
                    @endif

                </div>
            </div>
            <form action="{{route('printer.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row   p-lg-4 p-sm-1 m-2">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
                        <label for="" class=" m-0 font-weight-bold">Titular del equipo</label>
                        <select name="usuario" id="" class="form-control form-control-sm">
                            @forelse ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                            @empty
                                <li>No hay datos</li>
                            @endforelse

                        </select>
                        @error('area')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="" class=" m-0 font-weight-bold">Marca</label>
                            <input type="text" name="marca" value="{{old('marca')}}" class="form-control form-control-sm">
                            @error('marca')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div>

                    

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="" class=" m-0 font-weight-bold">Modelo</label>
                            <input type="text" name="modelo" value="{{'modelo'}}"  class="form-control form-control-sm">
                            @error('modelo')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="" class=" m-0 font-weight-bold">Laser o Tinta</label>
                            <select name="tipo" class="form-control form-control-sm">
                                <option value="laser">Laser</option>
                                <option value="tinta">Tinta</option>
                            </select>

                            @error('tipo')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="" class=" m-0 font-weight-bold">Número de serie</label>
                            <input type="text" name="serie" value="{{old('serie')}}" class="form-control form-control-sm">
                            @error('serie')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="form-group">
                            <label for="" class=" m-0 font-weight-bold">Observaciones</label>
                            <input name="observaciones" value="{{old('observaciones')}}" class="form-control form-control-sm" value="{{old('observaciones')}}">
                            @error('observaciones')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div>


                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <label for="" class="m-0 font-weight-bold">Foto 1</label>
                            <input type="file" class="form-control form-control-sm p-0" id="imagen0" name="imagen1">
                            <div id="previa0">
                                <img  id="img_tag0" class="img-fluid" alt="">
                            </div>
                            @error('imagen1')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center">
                        <div class="form-group">
                            <label for="" class="m-0 font-weight-bold">Foto 2</label>
                            <input type="file" class="form-control form-control-sm p-0" id="imagen1" name="imagen2" >
                            <div id="previa1">
                                <img  id="img_tag1" class="img-fluid" alt="">
                            </div>
                            @error('imagen2')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="form-group">
                            <button class="btn btn-success w-25 font-weight-bold">
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