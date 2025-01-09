<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Category | Kemed Store'
        ]);
    }

    public function create()
    {
        return view('category.create', [
            'title' => 'Create Category | Kemed Store'
        ]);
    }
}
