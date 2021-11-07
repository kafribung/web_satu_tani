<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;

class RetailOnionController extends Controller
{
    public function index()
    {
        $bawangPetanis = Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Eceran');
                        })
                        ->inRandomOrder()
                        ->paginate(4);
        return view('admin.product-retail-onion.product-relation-onion', compact('bawangPetanis'));
    }
}
