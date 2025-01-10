<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPost;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index', [
            'title' => 'Product | Kemed Store',
            'products' => Product::with('category')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'title' => 'Create Product | Kemed Store',
            'categories' => Category::all()
        ]);
    }

    public function store(ProductPost $request)
    {
        $validatedData = $request->validated();
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('products-images');
        }

        $validatedData = Product::create($validatedData);
        toastr()
            ->success('Product ' . $validatedData->name . ' successfully created');

        return redirect('/dashboard/product');
    }
}
