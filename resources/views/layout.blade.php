<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" href="/img/pc.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
  </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <style>
        body{
            background-color: aliceblue;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body >

@yield('contenido')

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('/js/js.js')}}"></script>

<script>
  // Cuando el DOM esté listo, añadir la clase para que el contenido se muestre suavemente
  document.addEventListener('DOMContentLoaded', function() {

    if(document.getElementById('content')){
      const content = document.getElementById('content');
      content.classList.remove('fade-out');
      content.classList.add('fade-in');

    }

  });

</script>


<script>
  if(document.getElementById('form-cerrar-session')){
    
    const cerrar_session = document.getElementById('cerrar_session');
    const form_cerrar_session = document.getElementById('form-cerrar-session');
    
  
    cerrar_session.addEventListener('click', function(){
  
      cerrar_session.disabled = true;
      form_cerrar_session.submit();
      setTimeout(() => {
        cerrar_session.disabled = false;
      }, 3000);
  
  
    })
  }
</script>

{{-- 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script> --}}

@yield('scripts')


</body>
</html>