<?php

namespace App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

class ProductController extends Controller
{
    public function getAllProduct()
    {
        $products = Product::paginate(6);
        $lowpriceProduct = Product::inRandomOrder()->where("price", "<=", 8000)->limit(4)->get();
        // dd($products);
        return view('pages.home', ['products' => $products, 'lowpriceProduct' => $lowpriceProduct]);
    }
}
