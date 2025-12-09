<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $description = $this->faker->paragraph();
        $status = $this->faker->randomElement(['active', 'in_progress', 'inactive']);
        $priority = $this->faker->randomElement(['low', 'medium', 'high']);
        $project_id = $this->faker->numberBetween(1, 30);
        $created_by = $this->faker->numberBetween(1, 30);
        $due_date = $this->faker->date();

        return [
            'tittle' => $title,
            'description' => $description,
            'status' => $status,
            'priority' => $priority,
            'project_id' => $project_id,
            'created_by' => $created_by,
            'due_date' => $due_date,
        ];
    }
}
