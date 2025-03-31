<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        $studentId = $this->route("student");

        return [
            'name' => 'nullable|string|max:70',
            'email' => 'nullable|email|unique:students,email,' . $studentId,
            'phone' => 'nullable|string|regex:/^(?:\+\d{1,}\s?)?\d{1,}\s?\d{1,}$/',
            'dob' => 'nullable|date|date_format:Y-m-d|after_or_equal:1970-01-01',
            'college_id' => "required|exists:colleges,id",
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => "The name must be a valid string.",
            'name.max' => "The name must not exceed 70 characters.",

            'email.email' => "Please enter a valid email address.",
            'email.unique' => "This email address is already in use.",

            'phone.string' => "The phone must be a valid string.",
            'phone.regex' => "Please enter a valid phone number format.",

            'dob.date' => "The date of birth must be a valid date.",
            'dob.date_format' => "The date of birth must be in the format YYYY-MM-DD.",
            'dob.after_or_equal' => "The date of birth must be after or equal to January 1, 1970.",

            'college_id.required' => "Please select a college.",
            'college_id.exists' => "The selected college does not exist in our records.",
        ];
    }
}
