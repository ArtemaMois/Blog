<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products()
    {
        $categories = Category::all();
        $products = Product::where('is_active', true)->get();
        return view('pages.products', [
            'categories' => $categories,
            'products' => $products]);
    }
}
