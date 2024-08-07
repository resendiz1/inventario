<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pcController;
use App\Http\Controllers\upsController;
use App\Http\Controllers\areaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\telefonoController;



Route::get('/user', [Controller::class, 'perfil_user'])->name('perfil.user');


Route::get('/', [homeController::class, 'index'])->name('home');
Route::post('/', [Controller::class, 'ingreso_admin'])->name('ingreso.admin');
Route::get('/admin', [Controller::class, 'perfil_admin'])->name('perfil.admin');

//  Ingreso de usuarios




//rutas para agregar a los usuarios
Route::get('/admin/agregando_users', [Controller::class, 'show_formulario'])->name('agregar.usuarios');


Route::post('/agregando_users', [Controller::class, 'registrar_usuarios'])->name('registrar.usuarios');



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

Route::get('/dispositivo{serie}', [homeController::class, 'show'])->name('device.show');