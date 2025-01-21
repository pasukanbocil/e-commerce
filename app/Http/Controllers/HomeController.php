<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Larva\Pexels\Pexels;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'home.home',
            [
                'title' => 'Home | Kemed Store',
                'categories' => Category::all(),
                'products' => Product::latest()->limit(10)->get()
            ]
        );
    }

    public function product()
    {
        return view(
            'home.product',
            [
                'title' => 'Product | Kemed Store'
            ]
        );
    }

    public function detail($id)
    {
        return view('home.detail', [
            'title' => 'Detail Product | Kemed Store',
            'product' => Product::with('category')->findOrFail($id)
        ]);
    }
}
