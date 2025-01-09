<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryPost;
use App\Models\Category;
use Illuminate\Http\Request;

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
        $category = Category::create($validated);
        toastr()
            ->success('Category ' . $category->category_name . ' successfully created');
        return redirect('/dashboard/category');
    }
}
