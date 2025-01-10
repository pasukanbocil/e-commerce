<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductPost extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama produk harus diisi',
            'name.max' => 'Nama produk maksimal 255 karakter',
            'description.required' => 'Deskripsi produk harus diisi',
            'price.required' => 'Harga produk harus diisi',
            'price.numeric' => 'Harga produk harus berupa angka',
            'stock.required' => 'Stok produk harus diisi',
            'stock.numeric' => 'Stok produk harus berupa angka',
            'image.required' => 'Gambar produk harus diisi',
            'image.image' => 'Gambar produk harus berupa gambar',
            'image.mimes' => 'Gambar produk harus berformat jpeg, png, jpg',
            'image.max' => 'Gambar produk maksimal 2MB',
            'category_id.required' => 'Kategori produk harus diisi',
            'category_id.exists' => 'Kategori produk tidak valid'
        ];
    }
}
