<?php

namespace App\Http\Controllers;

use App\Models\{Cart, Product};
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request, $productId)
    {
        // Jika produk stocknya 0
        if (Product::find($productId)->stock == 0) {
            return back()->with('message', 'Maaf produk ini telah habis');
        }

        // Jika user sudah memiliki pesanan
        if ($request->user()->checkouts()->whereIn('status', ['menunggu konfirmasi'])->count() > 0) {
            return redirect()->route('konfirmasi.index')->with('message', 'Anda tidak dapat melakukan pembelilan, selama pesanan belum selesai');
        }

        // Jika user sudah memiliki pesanan
        if ($request->user()->checkouts()->where('status', 'menunggu pembayaran')->count() > 0) {
            return redirect()->route('pesanan.index')->with('message', 'Anda tidak dapat melakukan pembelilan, selama pesanan belum selesai');
        }

        // Jika user sudah memiliki pesanan
        if ($request->user()->checkouts()->where('status', 'diproses')->count() > 0) {
            return redirect()->route('diproses.index')->with('message', 'Anda tidak dapat melakukan pembelilan, selama pesanan belum dikirim');
        }

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
