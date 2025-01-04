<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view(
            'home.home',
            [
                'title' => 'Kemed Store'

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
}
