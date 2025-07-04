
@extends('layout')
@include('assets.nav')
@section('contenido')
@section('title', 'Agregar usuarios')



<div class="container-fluid mt-5">
    
    <div class="row justify-content-center">
        {{-- div que encierra el formulario del usuario --}}
        <div class="col-sm-12 col-md-4  col-lg-2 bg-white p-4 mx-1 border border-5">
                <form action="{{route('registrar.usuarios')}}" method="POST" >
                    @csrf
                <div class="row">
                    <div class="col-12">
                        <h4 class="fw-bold">Agregar usuario</h4>
                        @if (session('agregado'))
                            <span class="text-success fw-bold">{{session('agregado')}}</span>
                        @endif
                    </div>
                    
                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="">Nombre completo</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" value="{{old('nombre')}}">
                            {!!$errors->first('nombre', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Correo Electronico inicio sesión</label>
                            <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control form-control-sm">
                            {!!$errors->first('email', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Correo Electronico para mostrar</label>
                            <input type="email" name="correo" value="{{old('correo')}}" id="correo" class="form-control form-control-sm">
                            {!!$errors->first('correo', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Celular</label>
                            <input type="tel" name="celular" value="{{old('celular')}}" id="celular" class="form-control form-control-sm">
                            {!!$errors->first('celular', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Extensión</label>
                            <input type="tel" name="extension" value="{{old('extension')}}" id="extension" class="form-control form-control-sm">
                            {!!$errors->first('extension', '<small class="text-danger"> :message </small> ')!!}
                        </div>

                        <div class="form-group mx-3">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <label for="">Contraseña</label>
                                </div>
                                <div class="col-9 p-0 m-0">
                                    <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control form-control-sm">
                                </div>
                                <div class="col-1 p-0 my-0 mx-3">
                                    <input type="checkbox" id="view_password">
                                </div>
                                {!!$errors->first('password', '<small class="text-danger"> :message </small>')!!}
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="">Direccion IP</label>
                            <input type="text" class="form-control form-control-sm" name="ip" value="{{old('ip')}}" >
                        </div>
                        
                        <div class="form-group">
                            <label for="">Puesto</label>
                            <input type="text" name="puesto" value="{{old('puesto')}}" class="form-control form-control-sm">
                            {!!$errors->first('puesto', '<small class="text-danger"> :message </small>')!!}
                        </div>


                        <div class="form-group">
                            <label for="">Planta</label>
                            <select name="planta" id="" class="form-control form-control-sm">
                                <option value="Planta 1">Planta 1</option>
                                <option value="Planta 2">Planta 2</option>
                                <option value="Planta 3">Planta 3</option>
                            </select>
                            {!!$errors->first('planta', '<small class="text-danger"> :message </small>')!!}
                        </div>



                        <div class="form-group">
                            <label for="">Su jefe directo es:  </label>
                            <select name="id_jefe" class="form-control form-control-sm">
                                @forelse ($usuarios as $usuario)
                                    @if ($usuario->jefe)
                                     <option value="{{$usuario->id}}">{{$usuario->name }} |{{$usuario->puesto}}</option>
                                    @endif
                                
                                @empty
                                    <option value="No options">Sin opciones</option>
                                @endforelse
                                    <option value="Gerencia">Es gerencia</option>
                            </select>
                            {!!$errors->first('jefe', '<small class="text-danger"> :message </small>')!!}
                        </div>

                        <div class="form-group">
                            <label for="">¿Tiene gente acargo? </label>
                            <select name="jefe" class="form-control form-control-sm">
                                <option value="0">No</option>
                                <option value="1">Si</option>
                            </select>
                            {!!$errors->first('jefe', '<small class="text-danger"> :message </small>')!!}
                        </div>

                        <div class="form-group">
                            <label for="">Ubicación</label>
                            <textarea name="ubicacion" class="form-control form-control-sm w-100" >{{old('ubicacion')}}</textarea>
                            {!!$errors->first('ubicacion', '<small class="text-danger"> :message </small>')!!}
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Agregar</button>
                        </div>

                    </div>

                </div>
             </form>
        </div>
        {{-- div que encierra el formulario del usuario --}}
        
        <div class="col-sm-12 col-md-7 col-lg-9 bg-white p-4 bg-white mx-1 border border-4 tabla-usuarios-scroll">
            <h3>Lista de usuarios</h3>
            @if (session('eliminado'))
                <h4 class="text-success font-weight-bold">{{session('eliminado')}}</h4>
            @endif
            @if (session('editado'))
                <h4 class="text-success font-weight-bold">{{session('editado')}}</h4>
            @endif
            @foreach ($errors->all() as $error)
                <h4 class="text-danger">{{$error}}</h4>
            @endforeach

            <table class="table table-bordered table-responsive-sm p-0">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Extensión</th>
                        <th scope="col">Planta</th>
                        <th scope="col">Resguardo</th>
                        <th scope="col">Accesos</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($usuarios as $usuario)               
                        <tr>
                            <td>{{$usuario->name}} </td>
                            <td>{{$usuario->puesto}} </td>
                            <td>{{$usuario->email}}</td> 
                            <td>{{$usuario->extension}}</td> 
                            <td>{{$usuario->planta}}</td>
                            <td> <a href="{{route('view.resguardo.admin', $usuario->id)}}"> Ver </a> </td>
                            <td> <a href="{{route('view.accesos.admin', $usuario->id)}}"> Ver </a> </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-secondary" data-toggle="modal" data-target="#e{{$usuario->id}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <button class="btn btn-dark" data-toggle="modal" data-target="#ac{{$usuario->id}}">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                            </td>                    

                        </tr>  
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>



{{-- aqui van a estar los modales para la edicion y la eliminacion de los usuarios --}}
@forelse ($usuarios as $usuarie)
    
    <!-- Modal -->
    <div class="modal fade" id="e{{$usuarie->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>¿Desea eliminar al usuario? </h4>
                </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <form action="{{route('usuario.eliminar', $usuarie->id)}}" method="POST">
                @csrf @method('PATCH')
                <button class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Confirmar
                    </button>
                </form>
                
            </div>
        </div>
        </div>
    </div>
    <!-- Modal -->


        <!-- Modal -->
    <div class="modal fade" id="ac{{$usuarie->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-md ">
                <div class="modal-content">
                     <div class="modal-header bg-dark text-white h5 ">Actualizando Usuario</div>
                        <div class="modal-body">
                            <div class="row justify-content-center">                                
                            <form action="{{route('actualizar.usuario', $usuarie->id)}}" method="POST">
                                @csrf @method('PATCH')
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Nombre completo</label>
                                        <input type="text" name="nombre_edit" class="form-control " value="{{old('nombre_edit', $usuarie->name)}}">
                                        {!!$errors->first('nombre_edit', '<small class="text-danger"> :message </small> ')!!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Correo Electronico iniciar sesion</label>
                                        <input type="email" name="email_edit" value="{{old('email_edit', $usuarie->email)}}" id="email" class="form-control ">
                                        {!!$errors->first('email_edit', '<small class="text-danger"> :message </small> ')!!}
                                    </div>

                                    <div class="form-group">
                                        <label for="">Correo Electronico Mostrar</label>
                                        <input type="email" name="correo_edit" value="{{old('correo_edit', $usuarie->correo)}}" id="email" class="form-control ">
                                        {!!$errors->first('correo_edit', '<small class="text-danger"> :message </small> ')!!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="tel" name="celular_edit" value="{{old('celular_edit', $usuarie->celular)}}" id="celular" class="form-control ">
                                        {!!$errors->first('celular_edit', '<small class="text-danger"> :message </small> ')!!}
                                    </div>
            
                                    <div class="form-group">
                                        <label for="">Extensión</label>
                                        <input type="tel" name="extension_edit" value="{{old('extension_edit', $usuarie->extension)}}" id="extension" class="form-control ">
                                        {!!$errors->first('extension_edit', '<small class="text-danger"> :message </small> ')!!}
                                    </div>

                                <div class="form-group">
                                    <label for="">Su jefe directo es: </label>
                                        <select name="jefe_edit"  class="form-control ">

                                            @if ($usuarie->id_jefe == 'Gerencia')
                                                <option value="Gerencia">Es gerencia</option>  
                                            @else
                                                
                                                
                                            @forelse ($jefes as $usuario)
                                                <option value="{{$usuario->id}}" {{($usuario->id == $usuarie->id_jefe) ? 'selected' : ''}}>{{$usuario->name}} | {{ $usuario->puesto}}</option>
                                            @empty
                                            @endforelse.
                                            @endif
                                        </select>
                                                
                                        {!!$errors->first('jefe_edit', '<small class="text-danger"> :message </small>')!!}
                                    </div>
            


                                    <div class="form-group mx-3">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12">
                                                <label for="">Contraseña</label>
                                            </div>
                                            <div class="col-9 p-0 m-0">
                                                <input type="password" name="password_edit" id="password1" value="{{old('password_edit', $usuarie->password)}}" class="form-control ">
                                            </div>
                                            <div class="col-1 p-0 my-0 mx-3">
                                                <input type="checkbox" id="view_password1">
                                            </div>
                                            {!!$errors->first('password_edit', '<small class="text-danger"> :message </small>')!!}
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="">Dirección IP</label>
                                        <input type="text" class="form-control" name="ip_update" value="{{old('ip_update', $usuarie->direccion_ip)}}" >
                                        {!!$errors->first('ip_update', '<small class="text-danger"> :message </small> ')!!}
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Puesto</label>
                                        <input type="tel" name="puesto_edit" value="{{old('puesto_edit', $usuarie->puesto)}}"  class="form-control ">
                                        {!!$errors->first('puesto_edit', '<small class="text-danger"> :message </small> ')!!}
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="">Planta </label>
                                        <select name="planta_edit" value={{old('planta_edit', $usuarie->planta)}} id="" class="form-control ">
                                            @if ($usuarie->planta == 'Planta 3')
                                                <option value="Planta 3">Planta 3</option>
                                                <option value="Planta 2">Planta 2</option>
                                                <option value="Planta 1">Planta 1</option>
                                            @endif
                                            
                                            @if ($usuarie->planta == 'Planta 2')
                                                <option value="Planta 2">Planta 2</option>
                                                <option value="Planta 1">Planta 1</option>
                                                <option value="Planta 3">Planta 3</option>
                                            @endif

                                            @if ($usuarie->planta == 'Planta 1')
                                                <option value="Planta 1">Planta 1</option>
                                                <option value="Planta 2">Planta 2</option>
                                                <option value="Planta 3">Planta 3</option>
                                            @endif

                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="">Ubicación</label>
                                        <textarea name="ubicacion_edit" class="form-control form-control-sm w-100" >{{old('ubicacion_edit', $usuarie->ubicacion)}}</textarea>
                                        {!!$errors->first('ubicacion_edit', '<small class="text-danger"> :message </small>')!!}
                                    </div>            
                                </div>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button class="btn btn-success">
                                    <i class="fa fa-check"></i>
                                    Confirmar
                                </button>
                                    </form>
                            
                            
                                
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                
                            </div>
                    </div>
                </div>
            </div>
        <!-- Modal -->


  @empty
      
  @endforelse
{{-- aqui van a estar los modales para la edicion y la eliminacion de los usuarios --}}









<script>
{
  const   $password = document.getElementById('password');
  const   $ver = document.getElementById('view_password');


  $ver.onchange = function(e){
    $password.type = $ver.checked ? "text" : "password"
  }
}

{

  const   $password = document.getElementById('password1');
  const   $ver = document.getElementById('view_password1');


  $ver.onchange = function(e){
    $password.type = $ver.checked ? "text" : "password"
  }

}

</script>


@endsection