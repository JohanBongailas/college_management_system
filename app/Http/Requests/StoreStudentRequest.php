<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name' => 'required|string|max:70',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|regex:/^(?:\+\d{1,}\s?)?\d{1,}\s?\d{1,}$/',
            'dob' => 'required|date|date_format:Y-m-d|after_or_equal:1970-01-01',
            'college_id' => 'required|exists:colleges,id',
        ];
    }

    public function messages(): array{
        {
            return [
                'name.required' => 'The name field is required.',
                'name.max' => 'The name field must not be longer than 70 characters.',
                'email.required' => 'The email field is required.',
                'email.email' => 'Please enter a valid email address.',
                'email.unique' => 'This email is already registered.',
                'phone.required' => 'The phone number is required.',
                'phone.regex' => 'Please enter a valid phone number format.',
                'dob.required' => 'The date of birth is required.',
                'dob.date' => 'Please enter a valid date format (YYYY-MM-DD).',
                'dob.after_or_equal' => 'The date of birth must be after or equal to January 1, 1970.',
                'college_id.required' => 'Please select a college.',
                'college_id.exists' => 'The selected college does not exist in our records.',
            ];
        }
    }
}
