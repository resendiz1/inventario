@extends('layout')
@section('title', 'Agregando impresora')
@include('assets.nav')
@section('contenido')


<div class="container">
    <div class="row d-flex justify-content-center p-3 mt-2">
        <div class="col-12 mt-5 bg-white p-lg-4 p-sm-1 border">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Agregar Impresora</h3>
                    @if (session('agregado'))
                       <li class="text-success fw-bold"> {{session('agregado')}}</li>
                    @endif

                </div>
            </div>
            <form action="{{route('printer.create')}}" method="POST" enctype="multipart/form-data" id="formulario" onsubmit="deshabilita()">
                @csrf
                <div class="row   p-lg-4 p-sm-1 m-2">
                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
                        <label for="" class=" m-0 font-weight-bold">Titular del equipo</label>
                        <select name="usuario" id="" class="form-control form-control-sm">
                            @forelse ($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->name}} | {{ $usuario->puesto }}</option>
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



                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-4 mb-3">
                        <label for="" class=" m-0 font-weight-bold">¿Comparte con alguien?</label>
                        <select name="comparte" id="" class="form-control form-control-sm">
                            <option value="Con Nadie">Nadie</option>
                            @forelse ($usuarios as $usuario)
                                <option value="{{$usuario->name}}">{{$usuario->name}} | {{ $usuario->puesto }}</option>
                            @empty
                                <li>No hay datos</li>
                            @endforelse

                        </select>
                        @error('comparte')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                        @enderror
                    </div>


                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
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

                    

                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-2">
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
                                <option value="Laser">Laser</option>
                                <option value="Tinta">Tinta</option>
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
                            <label for="" class=" m-0 font-weight-bold">Número de serie</label>
                            <input type="text" name="serie" value="{{old('serie')}}" class="form-control form-control-sm">
                            @error('serie')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                    </div>



                    <div class="col-12 col-xs-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="form-group">
                            <label for="" class="font-weight-bold mb-0">Estado</label>
                            <select name="estado"  class="form-control form-control-sm">
                                <option value="Nuevo">Nuevo</option>
                                <option value="Usado">Usado</option>
                            </select>   

                            @error('estado')
                                <small class="text-danger p-1">
                                    {{$message}}
                                </small>
                            @enderror
                       
                        </div>
                    </div>



                    <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-3">
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
                            <button class="btn btn-success w-25 font-weight-bold" id="login">
                                Agregar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>







{{-- aqui va el javascript --}}

<script>
    function deshabilita(){
        consol

        const $boton = document.getElementById('button');
        $boton.disable = true;
        $boton.textContent = "Procesando ...";



    }
</script>





@endsection