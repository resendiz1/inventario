<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();




        $usuario = new User();
        $usuario->name = "Arturo Resendiz";
        $usuario->email = "resendiz.galleta@gmail.com";
        $usuario->puesto = "Encargado de sistemas";
        $usuario->planta = "Planta 1";
        $usuario->extension = "212";
        $usuario->celular = "No hay celular";
        $usuario->password = bcrypt('password');
        $usuario->ubicacion = "Edificio administrativo tercer piso junto a servicarga";
        $usuario->save();




        // $table->string('name');
        // $table->string('email')->unique();
        // $table->string('puesto');
        // $table->string('planta');
        // $table->string('extension');
        // $table->string('celular')->nullable()->default('No hay celular');
        // $table->string('password');
        // $table->string('ubicacion');



    }
}
