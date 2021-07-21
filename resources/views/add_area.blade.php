@extends('layout')
@section('title', 'Agregando areas de trabajo')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center p-3 mt-5">

        <div class="col-8 text-center">
            <img src="img/logo.png" class="img-fluid w-25" alt="">
        </div>

        <div class="col-9">
            <h3 class="text-success font-weight-bold m-3 text-center">
                Agregar área de trabajo
            </h3>
        </div>

        <div class="col-10 col-lg-5 col-md-8 col-sm-12 shadow-sm p-5 bg-white border-rounded">   
            <form action="{{route('area.create')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nombre del área de trabajo</label>
                    <input type="text" class="form-control" name="area" placeholder="Recursos Humanos">
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-block font-weight-bold text-start" id="entrar">
                        <i class="fa fa-plus-circle mr-2"></i>
                        Agregar
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection