<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jerónimo Toro C',
            'email' => 'jeronimo.1701921567@ucaldas.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // Usa Hash para encriptar la contraseña
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::factory(10)->create();
        Task::factory(50)->create();
    }
}
