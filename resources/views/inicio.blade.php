@extends('layout')
@section('contenido')

<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-3 mt-5 border border-3 bg-white p-4">
         <form action="{{route('ingreso.admin')}}" method="POST" id="login">
            @csrf
            <h3>Login</h3>
            @if (session('error'))
                <span class="text-danger fw-bold">{{session('error')}}</span>
            @endif
            
            <div class="form-group m-0">
                <label for="email" class="m-0 p-0">Usuario</label>
                <input type="text"   name="email" class="form-control" id="email" >

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
                    <option value="autoriza" >Autorizar Tintas</option>
                </select>
            </div>

            <div class="form-group m-0 mt-3">
                <button type="submit" class="btn btn-dark" id="boton">
                    Entrar
                </button>
            </div>
        </form>
        </div>
    </div>
</div>



<script>
   document.getElementById('login').addEventListener('submit', function(){
    let boton = document.getElementById('boton');

    boton.disabled = true;
    boton.style.cursor = "not-allowed";
    boton.style.opacity = "0.6";

})
</script>

@endsection