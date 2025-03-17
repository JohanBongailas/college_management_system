<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollegeRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "name" => "nullable|string|max:70",
            "address" => "nullable|string|max:255" 
        ];
    }

    public function messages(): array{
        {
            return [
                'name.max' => 'The name field must not be longer than 70 characters.',
                'address.max' => 'The address field must not be longer than 255 characters.'
            ];
        }
    }
}
