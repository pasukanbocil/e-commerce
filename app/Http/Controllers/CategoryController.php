<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryEditFormRequest;
use App\Http\Requests\CategoryPost;
use App\Models\Category;
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

    public function edit($id)
    {
        return view('category.edit', [
            'title' => 'Edit Category | Kemed Store',
            'category' => Category::find($id)
        ]);
    }

    public function update(CategoryEditFormRequest $request, $id)
    {
        $validated = $request->validated();
        $category = Category::find($id);
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

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        toastr()
            ->success('Category ' . $category->category_name . ' successfully deleted');
        return redirect('/dashboard/category');
    }
}
