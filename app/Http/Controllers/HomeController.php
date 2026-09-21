<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'categories' => Category::orderBy('name')->get(),
            'featuredProducts' => Product::with('category')
                ->where('is_featured', true)
                ->latest()
                ->take(8)
                ->get(),
        ]);
    }
}
