<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryEditFormRequest extends FormRequest
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
            'category_name' => 'required|string|max:255|unique:categories,category_name',
            'slug'=> 'required|string|max:255|unique:categories,slug',
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => 'Nama kategori harus diisi',
            'category_name.string' => 'Nama kategori harus berupa huruf',
            'category_name.max' => 'Nama kategori maksimal 255 karakter',
            'category_name.unique' => 'Nama kategori sudah ada',
            'slug.required' => 'Slug kategori harus diisi',
            'slug.unique' => 'Slug kategori sudah ada',
        ];
    }
}
