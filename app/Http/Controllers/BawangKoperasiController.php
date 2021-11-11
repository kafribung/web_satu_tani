<?php

namespace App\Http\Controllers;

use App\Models\Product;

class BawangKoperasiController extends Controller
{
    public function index()
    {
        $bawangKoperasis = Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Koperasi');
                        })
                        ->where('stock', '!=', 0)
                        ->inRandomOrder()
                        ->paginate(24);
        return view('client.bawang-koperasi.index', compact('bawangKoperasis'));
    }

    public function show(Product $product)
    {
        $bawangKoperasi = $product;

        $bawangKoperasis= Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Koperasi');
                        })
                        ->where('id', '!=', $product->id)
                        ->where('stock', '!=', 0)
                        ->inRandomOrder()
                        ->limit(4)
                        ->get();

        return view('client.bawang-koperasi.show', compact('bawangKoperasi', 'bawangKoperasis'));
    }
}
