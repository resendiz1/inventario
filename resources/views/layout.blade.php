<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <style>
        body{
            background-color: aliceblue;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-around">
            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-home text-white mr-2"></i>
                <a href="{{route('home')}}" class="text-white font-weight-bold">
                    Inicio
                </a>
            </div>

            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-desktop text-white mr-2"></i>
                <a href="{{route('add_pc')}}" class="text-white font-weight-bold">
                    Agregar PC
                </a>
            </div>
            
            
            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-charging-station text-white mr-2"></i>
                <a href="{{route('add_ups')}}" class="text-white font-weight-bold">
                    Agregar Regulador
                </a>
            </div>
            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-print text-white mr-2"></i>
                <a href="{{route('add_printer')}}" class="text-white font-weight-bold">
                    Agregar Impresoras
                </a>
            </div>
        </div>
    </div>

@yield('content')


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('app.js')}}"></script>
<script>

//Tomando los checkbox de Computadoras, reguladores e impresoras
   let $computadoras = document.getElementById('computadoras'),
       $impresoras = document.getElementById('impresoras'),
       $reguladores = document.getElementById('reguladores')


    $computadoras.addEventListener('click', function(){
        $impresoras.checked=false
        $reguladores.checked=false
    })

    $impresoras.addEventListener('click', function(){
        $computadoras.checked = false
        $reguladores.checked=false
    })

    $reguladores.addEventListener('click', function(){
        $impresoras.checked=false
        $computadoras.checked=false
    })
//Tomando los checkbox de Computadoras, reguladores e impresoras

//Tomando los checkbox de marca, serie y modelo
    let $serie = document.getElementById('serie'),
        $modelo = document.getElementById('modelo'),
        $marca = document.getElementById('marca')

    $serie.addEventListener('click', function(){
        $modelo.checked=false
        $marca.checked=false
    })

    $marca.addEventListener('click', function(){
        $serie.checked=false
        $modelo.checked=false
    })

    $modelo.addEventListener('click', function(){
        $serie.checked=false
        $marca.checked=false
    })



</script>

</body>
</html>