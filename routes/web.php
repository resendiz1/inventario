<?php
use App\Http\Controllers\accesosController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pcController;
use App\Http\Controllers\upsController;
use App\Http\Controllers\areaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\tintasController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\ticketsController;
use App\Http\Controllers\telefonoController;
use App\Http\Controllers\resguardoController;
use App\Http\Controllers\directorioController;


//Rutas para ir a los dispositivos
Route::get('/admin/lista_dispositivos/lista_computadoras/', [pcController::class, 'lista_computadoras'])->name('lista.computadoras');
Route::get('admin/lista_dispositivos/lista_computadoras/{id}', [pcController::class, 'editar_computadora_show'])->name('editar.computadora');
Route::patch('/admin/listas_dispositivos/lista_computadoras/actualizar/{id}', [pcController::class, 'editar_computadora_update'] )->name('actualizar.computadora');


Route::get('/admin/lista_dispositivos/lista_impresoras/editar/{id}', [printerController::class, 'editar_impresora_show'])->name('editar.impresora');





Route::get('/admin/lista_dispositivos/lista_impresoras/', [printerController::class, 'lista_impresoras'])->name('lista.impresoras');

Route::get('/admin/lista_dispositivos/lista_telefonos/', [telefonoController::class, 'lista_telefonos'])->name('lista.telefonos');

//Rutas para editar dispositivos

Route::get('/admin/lista_dispositivos/lista_telefonos/editar/{id}', [telefonoController::class, 'editar_telefono_show'])->name('editar.telefono');

// Route::get('/admin/lista_dispositivos/lista_computadoras/{id}/editar', [pcController::class, 'editar_computadora_show'])->name('editar.computadora');








Route::get('/admin/lista_dispositivos', [Controller::class, 'lista_dispositivos'] )->name('lista.dispositivos');


//RESPUESTA A LOS PEDIDOS DE TINTAS

Route::patch('/admin/respuesta/{id}', [tintasController::class, 'respuesta_admin'])->name('respuesta.admin');

Route::get('/admin/reporte/{id}', [ticketsController::class, 'detalle_reporte_admin'])->name('detalle.reporte.admin');
Route::post('/admin/reporte/comentario/{id}', [ticketsController::class, 'comentario_admin'])->name('comentario.reporte.admin');



// Route::get('/', [homeController::class, 'index'])->name('login');
Route::get('/', [homeController::class, 'index'])->name('login');
Route::post('/', [Controller::class, 'ingreso_admin'])->name('ingreso.admin');
Route::get('/admin', [Controller::class, 'perfil_admin'])->name('perfil.admin')->middleware('auth:admin');
Route::post('/admin', [Controller::class, 'cerrar_session'])->name('cerrar.session.admin');

//  Ingreso de usuarios

Route::patch('/admin/agregando_users/{id}/eliminado', [Controller::class, 'eliminar_usuario'])->name('usuario.eliminar')->middleware('auth:admin');
Route::patch('/admin/agregando_users/{id}/editado',[Controller::class, 'actualizar_usuario'] )->name('actualizar.usuario')->middleware('auth:admin');
Route::get('/admin/agregando_users/resguardo/{id}', [resguardoController::class, 'show_admin'])->name('view.resguardo.admin')->middleware('auth:admin');
Route::get('/admin/agregando_users/accesos/{id}', [accesosController::class, 'show_admin'] )->name('view.accesos.admin')->middleware('auth:admin');
Route::patch('/admin/agregando_users/accesos/autoriza_software/{id}', [accesosController::class, 'autoriza_software'])->name('autorizar.software');
Route::patch('/admin/agregando_users/accesos/desautoriza_software/{id}', [accesosController::class, 'desautoriza_software'])->name('desautorizar.software');
Route::patch('/admin/agregando_users/accesos/autorizar_sitio/{id}', [accesosController::class, 'autoriza_sitio'])->name('autorizar.sitio');
Route::patch('/admin/agregando_users/accesos/desautorizar_sitio/{id}', [accesosController::class, 'desautoriza_sitio'])->name('desautorizar.sitio');

//rutas para agregar a los usuarios
Route::get('/admin/agregando_users', [Controller::class, 'show_formulario'])->name('agregar.usuarios')->middleware('auth:admin');
Route::post('/agregando_users', [Controller::class, 'registrar_usuarios'])->name('registrar.usuarios')->middleware('auth:admin');



//rutas que se encargan de mostrar los resultados de la busqueda




//rutas que se encargan de la gestions de las computadoras
Route::get('/add_pc', [pcController::class, 'store'])->name('add_pc')->middleware('auth:admin');
Route::post('/add_pc', [pcController::class, 'create'])->name('pc.create')->middleware('auth:admin');

//rutas que se encargan de mostar los detalles de las computadoras 
Route::get('/resultado_pc', [pcController::class, 'show'])->name('pc.show')->middleware('auth:admin');




//rutas que se encargan de los UPS
Route::get('/add_telefono', [telefonoController::class, 'store'])->name('add.telefono')->middleware('auth:admin');
Route::post('/add_telefono', [telefonoController::class, 'create'])->name('telefono.create')->middleware('auth:admin');

//ruta que va a los detalles del regulador
Route::get('/resultado_ups', [telefonoController::class, 'show'])->name('ups.show')->middleware('auth:admin');





//rutas que se encargan de las impresoras
Route::get('/add_printer', [printerController::class, 'store'])->name('add_printer')->middleware('auth:admin');;
Route::post('/add_printer', [printerController::class, 'create'])->name('printer.create')->middleware('auth:admin');;



// Route::get('/dispositivo{serie}', [homeController::class, 'show'])->name('device.show');

Route::get('/user/tickets/detalles/{id}', [ticketsController::class, 'detalle_reporte'])->name('detalle.reporte')->middleware('auth');

//Rutas que funcionan en el perfil de los usuarios
Route::get('/user', [Controller::class, 'perfil_user'])->name('perfil.user')->middleware('auth');
Route::get('/user/tintas', [tintasController::class, 'show'])->name('tintas.show')->middleware('auth');
Route::get('/user/tickets', [ticketsController::class, 'show'])->name('tickets.show')->middleware('auth');
Route::post('/user/tintas/pedido', [tintasController::class, 'pedido'])->name('tintas.pedido')->middleware('auth');
Route::patch('/user/tintas/pedido/{id}', [tintasController::class, 'pedido_completo'])->name('pedido.completo')->middleware('auth');



Route::post('/user/tickets/', [ticketsController::class, 'reporte'])->name('reporte.post');
Route::patch('/user/tickets/{id}/completo', [ticketsController::class, 'reporte_completo'])->name('reporte.completo');
Route::post('/user/tickets/comentario/{id}', [ticketsController::class, 'comentario_usuario'])->name('comentario.reporte.usuario');

//directorio
Route::get('/user/directorio', [directorioController::class, 'show'])->name('directorio.show')->middleware('auth');

Route::post('/user/cerrar_sesion', [Controller::class, 'cerrar_session'])->name('cerrar.session');
Route::get('/user/resguardo', [resguardoController::class, 'show'])->name('user.resguardo')->middleware('auth');
Route::post('/user/resguardo/confirma/{id}', [Controller::class, 'aceptar_resguardo'])->name('confirma.resguardo');
Route::post('/user/resguardo/observaciones', [resguardoController::class, 'observaciones'])->name('observaciones.resguardo');


Route::get('/user/control_accesos', [accesosController::class, 'show'])->name('user.accesos')->middleware('auth');
Route::post('/user/control_accesos/solicitar_sitio', [accesosController::class, 'solicita_sitio'])->name('peticion.sitio');
Route::post('/user/control_accesos/solicitar_software', [accesosController::class, 'solicita_software'])->name('peticion.software');




///Creando las rutas que van a ser de un jefe
Route::get('/user/permisos', [accesosController::class, 'ver_permisos_jefe'])->name('permisos.show')->middleware('auth');
Route::patch('/user/permisos/autoriza_software/{id}', [accesosController::class, 'autoriza_software_jefe'])->name('autorizar.software.jefe');
Route::patch('/user/permisos/desautoriza_software/{id}', [accesosController::class, 'desautoriza_software_jefe'])->name('desautorizar.software.jefe');
Route::patch('/user/permisos/autorizar_sitio/{id}', [accesosController::class, 'autoriza_sitio_jefe'])->name('autorizar.sitio.jefe');
Route::patch('/user/permisos/desautorizar_sitio/{id}', [accesosController::class, 'desautoriza_sitio_jefe'])->name('desautorizar.sitio.jefe');



//Rutas para elñiminar los accesos solicitados por sui se equivoca o se cansa de pedirlo

Route::delete('/user/permisos/eliminar/{id}', [accesosController::class, 'eliminar_acceso'])->name('eliminar.acceso')->middleware('auth');



//Rutas que hacen que el usuario cargue las imagenes de los dispositivos

Route::patch('/user/resguardo/imagenes_pc/{id}', [pcController::class, 'fotos_computadora_usuario'])->name('fotos.computadora.usuario');
Route::patch('/user/resguardo/imagenes_printer/{id}', [printerController::class, 'fotos_impresora_usuario'])->name('fotos.impresora.usuario');
Route::patch('/user/resguardo/imagenes_phone/{id}', [telefonoController::class, 'fotos_telefono_usuario'])->name('fotos.telefono.usuario');




