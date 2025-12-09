<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        $description = $this->faker->text();
        $status = $this->faker->randomElement(['active', 'in_progress', 'completed']);
        $created_by = $this->faker->numberBetween(1, 30);

        return [
            'name' => $name,
            'description' => $description,
            'status' => $status,
            'created_by' => $created_by,
        ];
    }

}
