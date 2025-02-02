<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductPost;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequestEdit;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
        if ($request->hasFile('image')) {
            $imagePaths = [];
            foreach ($request->file('image') as $image) {
                $imagePaths[] = $image->store('products-images');
            }
            $validatedData['image'] = json_encode($imagePaths); // Simpan sebagai JSON di database
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->description), 200);

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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
