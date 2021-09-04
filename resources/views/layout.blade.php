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
    <div class="container">
        <div class="row mt-5 justify-content-around">
            <div class="col-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-desktop text-white mr-2"></i>
                <a href="{{route('home')}}" class="text-white font-weight-bold">
                    Inicio
                </a>
            </div>

            <div class="col-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-desktop text-white mr-2"></i>
                <a href="{{route('add_pc')}}" class="text-white font-weight-bold">
                    Agregar PC
                </a>
            </div>
            
            
            <div class="col-2 text-center p-2 bg-primary rounded-pill">
                <i class="fa fa-charging-station text-white mr-2"></i>
                <a href="{{route('add_ups')}}" class="text-white font-weight-bold">
                    Agregar Regulador
                </a>
            </div>
            <div class="col-2 text-center p-2 bg-primary rounded-pill">
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
    const count = document.querySelectorAll('input')
        console.log(count.length)

        for(i=0; i<count.length; i++){
            console.log(count[i].getAttribute('name'))
        }

</script>

</body>
</html>