<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class telefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Samsumg', 'Panasonic', 'Siemens']),
            'nuevo' => $this->faker->boolean(),
            'modelo' => $this->faker->randomElement(['KX-HDV130', 'ASDFSS-DSF', 'ASDAD-534D']),
            'serie' => $this->faker->text(10),
            'estado' => $this->faker->randomElement(['Nuevo', 'Usado']),
            'tipo' => $this->faker->randomElement(['Linea', 'Celular']),
            'imagen1' => $this->faker->randomElement(['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300']),
            'imagen2' => $this->faker->randomElement(['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300']),
            'imagen3' => $this->faker->randomElement(['https://picsum.photos/200/300', 'https://picsum.photos/200/300', 'https://picsum.photos/200/300']),
            'observaciones' => $this->faker->text(30),
            'user_id' => $this->faker->randomNumber()
        ];
    }
}


// $table->string('marca');
// $table->boolean('nuevo')->default(true);
// $table->string('modelo');
// $table->string('serie');
// $table->string('imagen1');
// $table->string('imagen2');
// $table->string('imagen3');
// $table->string('observaciones');
// $table->foreignId('user_id')->constrained('users')->onDelete('cascade');