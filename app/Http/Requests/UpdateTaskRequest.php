<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'title' => 'sometimes|string|max:255|min:3',
            'description' => 'sometimes|string|min:10',
            'status' => 'sometimes|string|in:pendiente,en progreso,completada',
            'priority' => 'sometimes|integer|min:1',
            'due_date' => 'nullable|date|after:today',
            'assigned_to' => 'nullable|integer|exists:users,id',
            'is_urgent' => 'sometimes|boolean',
            'estimated_hours' => 'nullable|numeric|min:0.5',
            'completed_at' => 'nullable|date|after_or_equal:due_date'
        ];
    }
}
