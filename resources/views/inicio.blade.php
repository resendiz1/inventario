@extends('layout')
@section('contenido')

<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-3 mt-5 border border-3 bg-white p-4">
         <form action="{{route('ingreso.admin')}}" method="POST">
            @csrf
            <h3>Login</h3>
            @if (session('error'))
                <span class="text-danger fw-bold">{{session('error')}}</span>
            @endif
            
            <div class="form-group m-0">
                <label for="email" class="m-0 p-0">Usuario</label>
                <input type="text" value="resendiz.galleta@gmail.com"  name="email" class="form-control" id="email" >

            </div>

            <div class="form-group m-0 mt-3">
                <label for="password" class="m-0 p-0">Password</label>
                <input type="password" name="password" id="password" class="form-control">

            </div>

            <div class="form-group m-0 mt-3">
                <label for="" class="m-0 p-0">Tipo de usuario:</label>
                <select class="form-control" name="tipo" id="">
                    <option value="usuario" >Usuario</option>
                    <option value="administrador" >Administrador</option>
                </select>
            </div>

            <div class="form-group m-0 mt-3">
                <button class="btn btn-dark">
                    Entrar
                </button>
            </div>
        </form>
        </div>
    </div>
</div>



@endsection