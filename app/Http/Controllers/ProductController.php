<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPost;
use App\Http\Requests\ProductRequestEdit;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit($id)
    {
        return view('product.edit', [
            'title' => 'Edit Product | Kemed Store',
            'product' => Product::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

    public function update(ProductRequestEdit $request, $id)
    {
        $validatedData = $request->validated();
        $product = Product::findOrFail($id);

        if (request()->hasFile(('image'))) {
            if ($product->image) {
                Storage::delete($product->image);
            }

            $validatedData['image'] = $request->file('image')->store('products-images');
        }

        $product->update($validatedData);
        toastr()
            ->success('Product ' . $product->name . ' successfully updated');

        return redirect('/dashboard/product');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->image) {
            Storage::delete($product->image);
        }

        $product->delete();
        toastr()
            ->success('Product ' . $product->name . ' successfully deleted');

        return redirect('/dashboard/product');
    }
}
