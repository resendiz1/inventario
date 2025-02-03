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
                  <tr class="text-uppercase">
                    <th scope="col">Titulo</th>
                    <th scope="col">introduccion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($publicaciones as $publicacion)
                    <tr>
                      <th>{{$publicacion->titulo}}</th>
                      <td>{{$publicacion->introduccion}}</td>
                      <td>{{$publicacion->created_at}}</td>
                      <td class="text-underline"> 
                        <i class="fa fa-pencil mx-2"></i>
                        {{$publicacion->autor}}
                      </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-danger">
                            <i class="fa fa-eraser"></i>
                          </button>
                          <button class="btn btn-dark">
                            <i class="fa fa-edit"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  @empty
                      <li>No hay ni madres</li>
                  @endforelse
                </tbody>
              </table>
        </div>
    </div>



</div>


@endsection    
