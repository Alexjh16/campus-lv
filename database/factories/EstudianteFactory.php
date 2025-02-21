<?php

namespace Database\Factories;

use App\Models\Asignatura;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiante;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [     
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),

        ];
    }

    public function configure(){
        return $this->afterCreating(function(Estudiante $estudiante){
            Asignatura::factory()->create(['estudiante_id' => $estudiante]);
        });
    }
}
