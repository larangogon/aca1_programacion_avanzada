<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class RequestEvents extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'identification_card' => ['bail', 'required', 'string', 'max:20', 'min:9', 'exist:users,identification_card'],
            'event_id' => ['bail', 'required', 'integer', 'exists:events,id']
        ];
    }
}
