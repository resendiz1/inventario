@extends('layout')
@section('content')


<div class="container mt-5">
    <form action="{{route('registrar.usuarios')}}" method="POST" >
        @csrf

    <div class="row justify-content-center">
        <div class="col-4 bg-white p-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="fw-bold">Agregar usuario</h4>
                </div>
                
                <div class="col-12 mt-3">
                    <div class="form-group">
                        <label for="">Nombre completo</label>
                        <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                        {!!$errors->first('nombre', '<small class="text-danger"> :message </small> ')!!}
                    </div>

                    <div class="form-group">
                        <label for="">Correo Electronico</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control">
                        {!!$errors->first('email', '<small class="text-danger"> :message </small> ')!!}
                    </div>

                    
                    <div class="form-group">
                        <label for="">Puesto</label>
                        <input type="text" name="puesto" value="{{old('puesto')}}" class="form-control">
                        {!!$errors->first('puesto', '<small class="text-danger"> :message </small>')!!}
                    </div>

                    <div class="form-group">
                        <label for="">Planta</label>
                        <select name="planta" id="" class="form-control form-control-sm">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success btn-sm w-100">Agregar</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

</form>

</div>



@endsection