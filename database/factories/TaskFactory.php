<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\User;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6, true),
            'description' => $this->faker->paragraph(3, true),
            'status' => $this->faker->randomElement(['pendiente', 'en progreso', 'completada']),
            'priority' => $this->faker->numberBetween(1, 5),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'assigned_to' => User::inRandomOrder()->first()->id ?? null,
            'created_by' => User::inRandomOrder()->first()->id,
            'is_urgent' => $this->faker->boolean,
            'estimated_hours' => $this->faker->randomFloat(2, 0, 100),
            'completed_at' => $this->faker->dateTimeBetween('now', '+1 year')
        ];
    }
}
