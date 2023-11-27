<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'title' => 'required|string|max:255|min:3',
            'description' => 'required|string|min:10',
            'status' => 'required|string|in:pendiente,en progreso,completada',
            'priority' => 'required|integer|min:1',
            'due_date' => 'nullable|date|after:today',
            'assigned_to' => 'nullable|integer|exists:users,id',
            'created_by' => 'required|integer|exists:users,id',
            'is_urgent' => 'required|boolean',
            'estimated_hours' => 'nullable|numeric|min:0.5',
            'completed_at' => 'nullable|date|after_or_equal:due_date'
        ];
    }
}
