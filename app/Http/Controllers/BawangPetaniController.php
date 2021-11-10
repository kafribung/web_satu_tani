<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BawangPetaniController extends Controller
{
    public function index()
    {
        $bawangPetanis = Product::with(['product_group', 'user'])
        ->whereHas('product_group', function($query){
            $query->where('name', 'Eceran');
        })
        ->where('stock', '!=', 0)
        ->inRandomOrder()
        ->paginate(24);
        return view('client.bawang-petani.index', compact('bawangPetanis'));
    }

    public function show(Product $product)
    {
        $bawangPetani = $product;

        $bawangPetanis = Product::with(['product_group', 'user'])
        ->whereHas('product_group', function($query){
            $query->where('name', 'Eceran');
        })
        ->where('id', '!=', $product->id)
        ->where('stock', '!=', 0)
        ->inRandomOrder()
        ->limit(4)
        ->get();

        return view('client.bawang-petani.show', compact('bawangPetani', 'bawangPetanis'));
    }
}
