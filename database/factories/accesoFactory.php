<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class accesoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'tipo' => $this->faker->randomElement(['Software', 'Sitio']) ,
            'status' => $this->faker->boolean(),
            'justificacion' => $this->faker->text(20),
            'user_id' => $this->faker->randomNumber()
        ];
    }
}


