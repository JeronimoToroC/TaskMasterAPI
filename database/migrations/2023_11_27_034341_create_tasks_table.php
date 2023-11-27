<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Clave primaria autoincremental
            $table->string('title'); // Título de la tarea
            $table->text('description'); // Descripción detallada de la tarea
            $table->string('status'); // Estado actual de la tarea (por ejemplo, 'pendiente', 'en progreso', 'completada')
            $table->integer('priority'); // Prioridad numérica de la tarea
            $table->date('due_date')->nullable(); // Fecha límite para completar la tarea (opcional)
            $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null'); // ID del usuario asignado a la tarea, con referencia a la tabla 'users'
            $table->foreignId('created_by')->constrained('users'); // ID del usuario que creó la tarea, con referencia a la tabla 'users'
            $table->boolean('is_urgent')->default(false); // Indica si la tarea es urgente
            $table->decimal('estimated_hours', 5, 2)->nullable(); // Horas estimadas para completar la tarea
            $table->timestamp('completed_at')->nullable(); // Fecha y hora de cuando se completó la tarea (opcional)
            $table->timestamps(); // Campos automáticos para 'created_at' y 'updated_at'
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
