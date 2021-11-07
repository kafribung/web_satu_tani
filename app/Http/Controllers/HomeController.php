<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bawangPetanis = Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Eceran');
                        })
                        ->where('stock', '!=', 0)
                        ->inRandomOrder()
                        ->limit(4)
                        ->get();
        return view('client.home.home', compact('bawangPetanis'));
    }
}
