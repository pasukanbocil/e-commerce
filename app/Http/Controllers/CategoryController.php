<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryEditFormRequest;
use App\Http\Requests\CategoryPost;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Category | Kemed Store',
            'categories' => Category::paginate(10)
        ]);
    }

    public function create()
    {
        return view('category.create', [
            'title' => 'Create Category | Kemed Store'
        ]);
    }

    public function store(CategoryPost $request)
    {
        $validated = $request->validated();
        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('categories-images');
        }
        $category = Category::create($validated);
        toastr()
            ->success('Category ' . $category->category_name . ' successfully created');
        return redirect('/dashboard/category');
    }

    public function edit($slug)
    {
        return view('category.edit', [
            'title' => 'Edit Category | Kemed Store',
            'category' => Category::where('slug', $slug)->first()
        ]);
    }

    public function update(CategoryEditFormRequest $request, $slug)
    {
        $validated = $request->validated();
        $category = Category::where('slug',$slug)->firstOrFail();
        if (request()->hasFile(('image'))) {
            if ($category->image) {
                Storage::delete($category->image);
            }

            $validate['image'] = $request->file('image')->store('categories-images');
        }
        $category->update($validated);
        toastr()
            ->success('Category ' . $category->category_name . ' successfully updated');
        return redirect('/dashboard/category');
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $category->delete();
        toastr()
            ->success('Category ' . $category->category_name . ' successfully deleted');
        return redirect('/dashboard/category');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->category_name);
        return response()->json(['slug' => $slug]);
    }
}
