<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
            'email.email' => 'Email tidak valid',
            'password.min' => 'Password minimal 8 karakter',
            'password.max' => 'Password maksimal 15 karakter',
        ];
    }
}
