@extends('layout')
@section('title', 'Muro')
@section('contenido')
@include('user.cabecera')


{{-- boton flotante con su modal --}}
<button class="btn btn-dark  flotante" data-toggle="modal" data-target="#publicar">
    <i class="fa fa-plus "></i>
</button>

<!-- Modal -->
<div class="modal fade" id="publicar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="exampleModalLabel">Crear nueva publicación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-0">

                <div class="col-12 ">
                    <div id="toolbar">
                        <select class="ql-font"></select>
                        <select class="ql-size"></select>
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                    </div>

                    <div id="articulo" class="ql-editor"></div>
                    <input type="hidden"  name="publicacion" value="{{old('publicacion')}}" id="contenido">
                    <button class="btn btn-dark my-2  btn-sm">
                        <i class="fa fa-paper-plane me-2"></i>
                        Publicar
                    </button>
                </div>




      </div>

    </div>
  </div>
</div>





<div class="container bg-white shadow shadown-sm">



    <div class="row mt-2 border p-3 mt-4">

        <div class="col-12">

            <div class="row border border-dark  border-5 rounded p-4">
                <div class="col-12">
                    <h3 class="p-0">Titulo de la publicacion</h3>
                    <small class="p-0">Autor de la publicacion - hace tres meses</small>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi deserunt aut, facere explicabo ducimus quos eaque voluptatum, harum reiciendis corrupti doloribus repellendus recusandae delectus, natus voluptates reprehenderit perspiciatis. Neque, illo?</p>
                </div>
                



                <div class="col-12">
                    <div class="btn-group">
                        <button class="btn btn-primary btn-sm">
                            <i class="fa fa-thumbs-up"></i>
                            32
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-thumbs-down"></i>
                            25
                        </button>
                    </div>
                </div>


                <div class="col-12 mt-3 bg-light py-3">
                    <a class="text-dark h5 font-wieght-bold" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Todos los comentarios
                    </a>

                    <div class="collapse mt-3" id="collapseExample">
                        
                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                                                <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>   

                    </div>
                </div>

                <div class="col-12 mt-2">
                    <h5>Comenta: </h5>
                    <textarea name="" class="form-control w-100" placeholder="Escribe un comentario para esta publicación..."></textarea>
                </div>



            </div>

            <div class="row border border-dark  border-5 rounded p-4 mt-4">
                <div class="col-12">
                    <h3 class="p-0">Titulo de la publicacion</h3>
                    <small class="p-0">Autor de la publicacion - hace tres meses</small>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi deserunt aut, facere explicabo ducimus quos eaque voluptatum, harum reiciendis corrupti doloribus repellendus recusandae delectus, natus voluptates reprehenderit perspiciatis. Neque, illo?</p>
                </div>
                



                <div class="col-12">
                    <div class="btn-group">
                        <button class="btn btn-primary btn-sm">
                            <i class="fa fa-thumbs-up"></i>
                            32
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-thumbs-down"></i>
                            25
                        </button>
                    </div>
                </div>


                <div class="col-12 mt-3 bg-light py-3">
                    <a class="text-dark h5 font-wieght-bold" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Todos los comentarios
                    </a>

                    <div class="collapse mt-3" id="collapseExample">
                        
                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                                                <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>   

                    </div>
                </div>

                <div class="col-12 mt-2">
                    <h5>Comenta: </h5>
                    <textarea name="" class="form-control w-100" placeholder="Escribe un comentario para esta publicación..."></textarea>
                </div>



            </div>

            <div class="row border border-dark   border-5 rounded p-4 mt-4">
                <div class="col-12">
                    <h3 class="p-0">Titulo de la publicacion</h3>
                    <small class="p-0">Autor de la publicacion - hace tres meses</small>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi deserunt aut, facere explicabo ducimus quos eaque voluptatum, harum reiciendis corrupti doloribus repellendus recusandae delectus, natus voluptates reprehenderit perspiciatis. Neque, illo?</p>
                </div>
                



                <div class="col-12">
                    <div class="btn-group">
                        <button class="btn btn-primary btn-sm">
                            <i class="fa fa-thumbs-up"></i>
                            32
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-thumbs-down"></i>
                            25
                        </button>
                    </div>
                </div>


                <div class="col-12 mt-3 bg-light py-3">
                    <a class="text-dark h5 font-wieght-bold" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Todos los comentarios
                    </a>

                    <div class="collapse mt-3" id="collapseExample">
                        
                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                                                <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>

                        <div class="card card-body border-0 mt-2">
                            <h6 class=""> <u> Segundo Usuario Dice: </u></h6>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>   

                    </div>
                </div>

                <div class="col-12 mt-2">
                    <h5>Comenta: </h5>
                    <textarea name="" class="form-control w-100" placeholder="Escribe un comentario para esta publicación..."></textarea>
                </div>



            </div>



        </div>

    </div>




</div>
    





<script>
    const quill = new Quill('#articulo', {
      theme: 'snow',
      modules:{
        toolbar: '#toolbar'
      }
    });
  
    quill.on('text-change', function(){
      document.getElementById('contenido').value = quill.root.innerHTML;
    })
  
  </script>
@endsection

