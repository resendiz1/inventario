@extends('layout')
@section('title', 'Gestionar Publicaciones')
@section('contenido')
@include('assets.nav')


<div class="container-fluid">


    <div class="row justify-content-center mt-5">

        <div class="col-10 my-3">
            <a href="{{route('agregar.post')}}" class="btn btn-dark">
                <i class="fa fa-plus"></i>
                Agregar Post
            </a>
        </div>

        <div class="col-10 text-center bg-white">
            <h2 class="p-3 font-weight-bold bg-dark text-white m-2">Publicaciones realizadas</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>



</div>


@endsection    
