<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bawangPetanis = Product::with('product_group')
                        ->where('product_group_id', 1)
                        ->inRandomOrder()
                        ->limit(4)
                        ->get();
        return view('client.home.home', compact('bawangPetanis'));
    }
}
