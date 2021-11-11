<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;

class CooperativeOnionController extends Controller
{
    public function __invoke()
    {
        $bawangKoperasis= Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Koperasi');
                        })
                        ->inRandomOrder()
                        ->paginate(40);
        return view('admin.product-cooperative-onion.product-relation-onion', compact('bawangKoperasis'));
    }
}
