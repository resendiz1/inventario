@extends('layout')
@include('assets.nav')
@section('contenido')


<div class="container mt-5">
    <form action="{{route('registrar.usuarios')}}" method="POST" >
        @csrf

    <div class="row justify-content-center">
        <div class="col-4 bg-white p-4">
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
                        <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                        {!!$errors->first('nombre', '<small class="text-danger"> :message </small> ')!!}
                    </div>

                    <div class="form-group">
                        <label for="">Correo Electronico</label>
                        <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control">
                        {!!$errors->first('email', '<small class="text-danger"> :message </small> ')!!}
                    </div>

                    <div class="form-group mx-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-12">
                                <label for="">Contraseña</label>
                            </div>
                            <div class="col-9 p-0 m-0">
                                <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                            </div>
                            <div class="col-1 p-0 my-0 mx-3">
                                <input type="checkbox" id="view_password">
                            </div>
                            {!!$errors->first('password', '<small class="text-danger"> :message </small>')!!}
                        </div>


                    </div>
                    
                    <div class="form-group">
                        <label for="">Puesto</label>
                        <input type="text" name="puesto" value="{{old('puesto')}}" class="form-control">
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
                        <textarea name="ubicacion" class="form-control w-100" ></textarea>
                        {!!$errors->first('ubicacion', '<small class="text-danger"> :message </small>')!!}
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Agregar</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

</form>

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