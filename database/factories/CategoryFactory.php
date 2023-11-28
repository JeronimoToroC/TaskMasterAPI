<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Genera un nombre de categoría aleatorio
            'description' => $this->faker->sentence, // Genera una descripción aleatoria
            'type' => $this->faker->randomElement(['personal', 'trabajo', 'ocio']), // Tipo aleatorio
            'active' => $this->faker->boolean // Estado activo o inactivo aleatorio
        ];
    }
}
