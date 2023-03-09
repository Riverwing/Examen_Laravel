<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Alumno::class;

    public function definition(): array
    {
        return [/*DEVUELVE UN ARRAY de nombre, apellido y email*/
            //
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'email' => fake()->email(),
        ];
    }
}
