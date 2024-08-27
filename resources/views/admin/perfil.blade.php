@extends('layout')
@section('contenido')

@include('assets.nav')

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Computadoras: </b> 10
            </div>
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Impresoras: </b> 12
            </div>
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Teléfonos: </b> 10
            </div>
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Pedidos de tinta: </b> 10
            </div>
            <div class="col-2 text-center p-3 bg-white border border-3 m-2">
                <b>Reportes : </b> 10
            </div>
        </div>
    </div>




    <div class="container">

        <div class="row justify-content-center">


            <div class="col-12 bg-white m-1 border border-3 mt-5">
                <h3 class="py-3" >Pedidos de tintas</h3>

                <table class="table table-bordered table-responsive-md p-0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Pedido</th>
                                <th scope="col">Colores</th>
                                <th scope="col">Número</th>
                                <th scope="col">Estado</th>
        
                            </tr>
                        </thead>
                        <tbody>
                        
             
                            <tr>
                                <td>Arturo Resendiz|</td>
                                <td>12 de agostos del 2024</td>
                                <td>Rojo, negro y azul</td>
                                <td>664</td>
                                <td class="text-start"> <i class="fa fa-check-circle"></i> Completado </td>                      
                            </tr>     
                            


    
                    </tbody>
                </table>

            </div>





            <div class="col-12 bg-white m-1 mt-5 border border-3">
                <h3 class="py-3" >Reportes de usuarios</h3>

                <table class="table table-bordered table-responsive-md p-0">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha Pedido</th>
                                <th scope="col">Colores</th>
                                <th scope="col">Número</th>
                                <th scope="col">Estado</th>
        
                            </tr>
                        </thead>
                        <tbody>
                        
             
                            <tr>
                                <td>Arturo Resendiz|</td>
                                <td>12 de agostos del 2024</td>
                                <td>Rojo, negro y azul</td>
                                <td>664</td>
                                <td class="text-start"> <i class="fa fa-check-circle"></i> Completado </td>                      
                            </tr>     
                            


    
                    </tbody>
                </table>

            </div>






        </div>
    </div>




@endsection