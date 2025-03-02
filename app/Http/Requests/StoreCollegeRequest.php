<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollegeRequest extends FormRequest
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
            "name" => "required|string|unique:colleges,name|max:70",
            "address" => "required|string|max:255" 
        ];
    }

    public function messages(): array{
        {
            return [
                'name.required' => 'The name field is required.',
                'name.unique' => 'The name field must be unique',
                'name.max' => 'The name field must not be longer than 70 characters.',
                'address.required' => 'The address field is required',
                'address.max' => 'The address field must not be longer than 255 characters.'
            ];
        }
    }
}
