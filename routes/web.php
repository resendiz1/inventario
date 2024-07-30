<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pcController;
use App\Http\Controllers\upsController;
use App\Http\Controllers\areaController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\printerController;



//rutas para agregar a los usuarios
Route::get('/agregando_users', [Controller::class, 'show_formulario'])->name('agregar_usuarios');
Route::post('/agregando_users/post', [Controller::class, 'registrar_usuarios'])->name('registrar.usuarios');



//rutas que se encargan de mostrar los resultados de la busqueda
Route::get('/', [homeController::class, 'index'])->name('home');
Route::post('/', [homeController::class, 'buscar'])->name('home.buscar');



//rutas que se encargan de la gestions de las computadoras
Route::get('/add_pc', [pcController::class, 'store'])->name('add_pc');
Route::post('/add_pc', [pcController::class, 'create'])->name('pc.create');

//rutas que se encargan de mostar los detalles de las computadoras 
Route::get('/resultado_pc', [pcController::class, 'show'])->name('pc.show');




//rutas que se encargan de los UPS
Route::get('/add_telefono', [upsController::class, 'store'])->name('add_telefono');
Route::post('/add_ups', [upsController::class, 'create'])->name('ups.create');

//ruta que va a los detalles del regulador
Route::get('/resultado_ups', [upsController::class, 'show'])->name('ups.show');





//rutas que se encargan de las impresoras
Route::get('/add_printer', [printerController::class, 'store'])->name('add_printer');
Route::post('/add_printer', [printerController::class, 'create'])->name('printer.create');

//ruta que va a los detalles de las impresoras

Route::get('/resultado_printer', [printerController::class, 'show'])->name('printer.show');






//Ruta que se encarga de mostrar todos los proyectos

Route::get('/dispositivo{serie}', [homeController::class, 'show'])->name('device.show');