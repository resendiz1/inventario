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













    
@yield('content')


















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('/js/js.js')}}"></script>
<script>







//recibo todos los parametros 
const previa = (inputImg, imgTag, divPreview) => {
    const  imagen = document.getElementById(inputImg),
           imagen_tag = document.getElementById(imgTag),
           preview = document.getElementById(divPreview);
           

    if(imagen && imagen_tag && preview){
        {
            imagen.addEventListener('change', function(e){
    
                    // Creamos el objeto de la clase FileReader
                    let reader = new FileReader();
                    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
                    reader.readAsDataURL(e.target.files[0]);
                    // Le decimos que cuando este listo ejecute el código interno
                    reader.onload = function(){
                    imagen_tag.src = reader.result;
    
                    preview.innerHTML = '';
                    //Cambio el color de el contenedor para indicar que la imagen ya esta cargada
                 
                    preview.append(imagen_tag);
                };
            })   
        }   
    }
}

const numeroInputs = document.getElementsByClassName('imagen');

    for(i=0 ; i<numeroInputs.length; i++){
      const imagen_perfil = 'imagen'+i,
      img_tag       = 'img_tag'+i,
      preview       =  'previa'+i;  
              
      previa(imagen_perfil, img_tag, preview)
              
    }












// //CODIGO QUE MUESTRA LA VISTA PREVIA DE LAS IMAGENES
// const contador = document.getElementsByClassName('imagen') 


// for(i=0 ; i<contador.length; i++){


// document.getElementById('imagen'+i).onchange = function(e){

// //se crea el objeto fileReader que nos leera nuestra imagen
// let lector = new FileReader();

// // Se lee el archivo y se lo pasa al FileReader
// lector.readAsDataURL(e.target.files[0])

// //Cuando el FileReader este listo va a ejecutar este codigo
// lector.onload = function(){
//     let previa = document.getElementById('previa'+i),
//             imagen = document.createElement('img')
            
//             imagen.src = lector.result
//             imagen.className = 'img-fluid w-200 mt-4 shadow p-3'

//             previa.innerHTML = ''
//             previa.append(imagen)
// }

// }



// }







</script>

</body>
</html>