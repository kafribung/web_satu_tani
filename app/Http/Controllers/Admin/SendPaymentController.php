<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Http\Controllers\Controller;
use App\Models\Product;

class SendPaymentController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('user')
                    ->where('status', 'dikirim')
                    ->paginate(30);

        return view('admin.send-payment.send-payment' ,compact('checkouts'));
    }

    public function update(Checkout $checkout)
    {
        $checkout->update([
            'status' => 'selesai',
        ]);

        // Kurangi stock produk yang dibeli
        foreach (json_decode($checkout->carts) as $cart) {
            $product = Product::find($cart->product_id);

            $stock = $product->stock - $cart->stock;
            $product->update([
                'stock' => $stock
            ]);
        }

        return back()->with('message', 'Barang telah diterima '. $checkout->user->name .' dan list pembayaran dipindahkan ke selesai');
    }
}
