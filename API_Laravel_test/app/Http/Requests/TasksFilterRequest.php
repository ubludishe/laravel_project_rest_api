<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksFilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => 'string',
            'priority' => 'string',
            'project_id' => 'integer|exists:projects,id',
            'assigned_to' => 'integer|exists:users,id',
            'due_date' => 'date|date_format:Y-m-d',
        ];
    }
}
