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
            <div class="col-5 col-lg-1 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <a href="{{route('home')}}" class="text-white font-weight-bold">
                    <i class="fa fa-home text-white mr-2"></i>
                    Inicio
                </a>
            </div>

            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <a href="{{route('add_pc')}}" class="text-white font-weight-bold">
                    <i class="fa fa-desktop text-white mr-2"></i>
                    Agregar PC
                </a>
            </div>
            
            
            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <a href="{{route('add_ups')}}" class="text-white font-weight-bold">
                    <i class="fa fa-charging-station text-white mr-2"></i>
                    Agregar Regulador
                </a>
            </div>
            <div class="col-5 col-lg-2 col-md-6 col-sm-12 m-2 text-center p-2 bg-primary rounded-pill">
                <a href="{{route('add_printer')}}" class="text-white font-weight-bold">
                    <i class="fa fa-print text-white mr-2"></i>
                    Agregar Impresoras
                </a>
            </div>
        </div>
    </div>

@yield('content')


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('/js/js.js')}}"></script>
<script>





//CODIGO QUE MUESTRA LA VISTA PREVIA DE LAS IMAGENES
const contador = document.getElementsByClassName('imagen') 


for(i=0 ; i<contador.length; i++){


document.getElementById('imagen'+i).onchange = function(e){

//se crea el objeto fileReader que nos leera nuestra imagen
let lector = new FileReader();

// Se lee el archivo y se lo pasa al FileReader
lector.readAsDataURL(e.target.files[0])

//Cuando el FileReader este listo va a ejecutar este codigo
lector.onload = function(){
    let previa = document.getElementById('previa'+i),
            imagen = document.createElement('img')
            
            imagen.src = lector.result
            imagen.className = 'img-fluid w-200 mt-4 shadow p-3'

            previa.innerHTML = ''
            previa.append(imagen)
}

}



}







</script>

</body>
</html>