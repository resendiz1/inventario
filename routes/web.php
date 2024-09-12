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







// Route::get('/', [homeController::class, 'index'])->name('login');
Route::get('/', [homeController::class, 'index'])->name('login');
Route::post('/', [Controller::class, 'ingreso_admin'])->name('ingreso.admin');
Route::get('/admin', [Controller::class, 'perfil_admin'])->name('perfil.admin')->middleware('auth:admin');
Route::post('/admin', [Controller::class, 'cerrar_session'])->name('cerrar.session.admin');

//  Ingreso de usuarios

Route::patch('/admin/agregando_users/{id}/eliminado', [Controller::class, 'eliminar_usuario'])->name('usuario.eliminar');
Route::patch('/admin/agregando_users/{id}/editado',[Controller::class, 'actualizar_usuario'] )->name('actualizar.usuario');
Route::get('/admin/agregando_users/resguardo/{id}', [resguardoController::class, 'show_admin'])->name('view.resguardo.admin');
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
Route::get('/add_pc', [pcController::class, 'store'])->name('add_pc');
Route::post('/add_pc', [pcController::class, 'create'])->name('pc.create');

//rutas que se encargan de mostar los detalles de las computadoras 
Route::get('/resultado_pc', [pcController::class, 'show'])->name('pc.show');




//rutas que se encargan de los UPS
Route::get('/add_telefono', [telefonoController::class, 'store'])->name('add.telefono');
Route::post('/add_telefono', [telefonoController::class, 'create'])->name('telefono.create');

//ruta que va a los detalles del regulador
Route::get('/resultado_ups', [telefonoController::class, 'show'])->name('ups.show');





//rutas que se encargan de las impresoras
Route::get('/add_printer', [printerController::class, 'store'])->name('add_printer');
Route::post('/add_printer', [printerController::class, 'create'])->name('printer.create');

//ruta que va a los detalles de las impresoras

Route::get('/resultado_printer', [printerController::class, 'show'])->name('printer.show');


//Ruta que se encarga de mostrar todos los proyectos

// Route::get('/dispositivo{serie}', [homeController::class, 'show'])->name('device.show');

Route::get('/user/tickets/detalles/{id}', [ticketsController::class, 'detalle_reporte'])->name('detalle.reporte');

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
