

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





