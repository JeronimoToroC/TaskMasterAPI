<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Especifica los campos que pueden ser asignados masivamente
    protected $fillable = [
        'title',
        'description',
        'status',
        'priority',
        'due_date',
        'assigned_to',
        'created_by',
        'is_urgent',
        'estimated_hours',
        'completed_at'
    ];

    // Relación con el usuario asignado a la tarea
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Relación con el usuario que creó la tarea
    public function createdByUser()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
