<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Reporte;
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


        // $this->call(AdminSeeder::class);

        $users = User::all();

        foreach($users as $user){
            Reporte::factory(100)->create([
                'user_id' =>$user->id
            ]);
        }




    }
}
