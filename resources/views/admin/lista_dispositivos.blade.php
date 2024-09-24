@extends('layout')
@section('contenido')
@section('title', 'Lista de dispositivos')
@include('assets.nav')


<div class="container bg-white mt-5">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primero</th>
                    <th scope="col">Último</th>
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
                </tbody>
              </table>
        </div>
    </div>
</div>





@endsection