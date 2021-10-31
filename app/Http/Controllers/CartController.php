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

        // Cek apakah produk sudah ada atau belum
        if (Cart::where([ ['product_id', $productId], ['user_id', auth()->id()] ])->count() > 0 ) {
            $product = Cart::where([ ['product_id', $productId], ['user_id', auth()->id()] ])->first();

            $data = [];
            $data['stock'] = $product->stock + $request->stock;
            $data['price'] = $product->price * $data['stock'];

            $product->update($data);
            return back()->with('message', 'Produk berhasil ditambahakan dengan produk yang lama');
        }

        $data = $request->validate([
            'stock'   => 'required|string',
            'price'   => 'required|numeric',
        ]);

        $data['user_id']    = auth()->id();
        $data['product_id'] = $productId;

        $data['price']    = $request->stock * $request->price;

        Cart::create($data);
        return back()->with('message', 'Produk ditambhakan dikeranjang');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return back()->with('message', 'Produk dihapus dari dikeranjang');
    }
}
