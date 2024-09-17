<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class impresoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Epson', 'Canon', 'Brother']) ,
            'nuevo' => $this->faker->boolean(),
            'modelo' => $this->faker->randomElement(['Modelo 1', 'Modelo 2', 'Modelo 3']) ,
            'tipo' => $this->faker->randomElement(['Tinta', 'Tiner']),
            'estado' => $this->faker->randomElement(['Nuevo', 'Usado']),
            'serie' => $this->faker->text(10),
            'comparte' => $this->faker->text(10),
            'observaciones' => $this->faker->text(20) ,
            'user_id' => $this->faker->randomNumber(),
            'imagen1' => $this->faker->randomElement(['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300']),
            'imagen2' => $this->faker->randomElement(['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300'])
        ];
    }
}


// $table->string('marca');
// $table->boolean('nuevo')->default(true);
// $table->string('modelo');
// $table->string('tipo');
// $table->string('serie');
// $table->string('observaciones');
// $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
// $table->string('imagen1');
// $table->string('imagen2');