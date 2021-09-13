<?php

use App\Http\Controllers\areaController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pcController;
use App\Http\Controllers\printerController;
use App\Http\Controllers\upsController;




//rutas que se encargan de mostrar los resultados de la busqueda
Route::get('/', [homeController::class, 'index'])->name('home');
Route::post('/', [homeController::class, 'buscar'])->name('home.buscar');



//rutas que se encargan de la gestions de las computadoras
Route::get('/add_pc', [pcController::class, 'store'])->name('add_pc');
Route::post('/add_pc', [pcController::class, 'create'])->name('pc.create');




//rutas que se encargan de los UPS
Route::get('/add_ups', [upsController::class, 'store'])->name('add_ups');
Route::post('/add_ups', [upsController::class, 'create'])->name('ups.create');





//rutas que se encargan de las impresoras
Route::get('/add_printer', [printerController::class, 'store'])->name('add_printer');
Route::post('/add_printer', [printerController::class, 'create'])->name('printer.create');


