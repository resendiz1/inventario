@extends('layout')
@include('assets.nav')
@section('contenido')
@section('title', 'Agregar usuarios')

<div class="container-fluid mt-5">
    
    
    <div class="row justify-content-center">
        {{-- div que encierra el formulario del usuario --}}
        <div class="col-sm-12 col-md-4  col-lg-2 bg-white p-4 mx-1 border border-5">
                <form action="{{route('registrar.usuarios')}}" method="POST" >
                    @csrf
                <div class="row">
                    <div class="col-12">
                        <h4 class="fw-bold">Agregar usuario</h4>
                        @if (session('agregado'))
                            <span class="text-success fw-bold">{{session('agregado')}}</span>
                        @endif
                    </div>
                    
                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="">Nombre completo</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" value="{{old('nombre')}}">
                            {!!$errors->first('nombre', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Correo Electronico</label>
                            <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control form-control-sm">
                            {!!$errors->first('email', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Celular</label>
                            <input type="tel" name="celular" value="{{old('celular')}}" id="celular" class="form-control form-control-sm">
                            {!!$errors->first('celular', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Extensión</label>
                            <input type="tel" name="extension" value="{{old('extension')}}" id="extension" class="form-control form-control-sm">
                            {!!$errors->first('extension', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group mx-3">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <label for="">Contraseña</label>
                                </div>
                                <div class="col-9 p-0 m-0">
                                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-sm">
                                </div>
                                <div class="col-1 p-0 my-0 mx-3">
                                    <input type="checkbox" id="view_password">
                                </div>
                                {!!$errors->first('password', '<small class="text-danger"> :message </small>')!!}
                            </div>


                        </div>
                        
                        <div class="form-group">
                            <label for="">Puesto</label>
                            <input type="text" name="puesto" value="{{old('puesto')}}" class="form-control form-control-sm">
                            {!!$errors->first('puesto', '<small class="text-danger"> :message </small>')!!}
                        </div>


                        <div class="form-group">
                            <label for="">Planta</label>
                            <select name="planta" id="" class="form-control form-control-sm">
                                <option value="1">Planta 1</option>
                                <option value="2">Planta 2</option>
                                <option value="3">Planta 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Ubicación</label>
                            <textarea name="ubicacion" class="form-control form-control-sm w-100" ></textarea>
                            {!!$errors->first('ubicacion', '<small class="text-danger"> :message </small>')!!}
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Agregar</button>
                        </div>

                    </div>

                </div>
             </form>
        </div>
        {{-- div que encierra el formulario del usuario --}}
        
        <div class="col-sm-12 col-md-7  col-lgt-8 bg-white p-4 bg-white mx-1 border border-4 tabla-usuarios-scroll">
            <h3>Lista de usuarios</h3>
            <table class="table table-bordered table-responsive-sm p-0">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Planta</th>

                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($usuarios as $usuario)               
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td> 
                            <td>{{$usuario->celular}}</td>
                            <td>{{$usuario->planta}}</td>                    
                        </tr>  
                    @empty
                        
                    @endforelse
                    
                    
                </tbody>
            </table>
        </div>



    </div>




</div>



<script>
  const   $password = document.getElementById('password');
  const   $email = document.getElementById('email');
  const   $ver = document.getElementById('view_password');


  $ver.onchange = function(e){
    $password.type = $ver.checked ? "text" : "password"
  }


</script>


@endsection