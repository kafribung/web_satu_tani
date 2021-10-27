<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request, $productId)
    {
        // Cek apakah ownernya sendiri atau bukan
        if ($request->user == auth()->user()->name) {
            return back()->with('message', 'Anda tidak dapat membeli produk sendiri');
        }

        $data = $request->validate([
            'stock'   => 'required|string',
            'price'   => 'required|numeric',
            'discount'=> 'required|numeric',
        ]);

        $data['user_id']    = auth()->id();
        $data['product_id'] = $productId;
        $data['price']      = $request->stock * $request->price;

        Cart::create($data);
        return back()->with('message', 'Produk ditambhakan dikeranjang');
    }
}
