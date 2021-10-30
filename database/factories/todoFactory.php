<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class todoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tache'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'created_at'=>now()
        ];
    }
}
