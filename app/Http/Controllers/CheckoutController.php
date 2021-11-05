<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Cek apakah products ada atau tidak
        if (auth()->user()->carts()->count() == 0) {
            return redirect('/')->with('message', 'anda tidak memiliki barang di kerangjang');
        }
        return view('client.pembayaran.pembayaran');
    }

    public function store(Request $request)
    {
        // Jika user sudah memiliki pesanan
        if ($request->user()->checkouts()->where('status', 'menunggu konfirmasi')->count() > 0) {
            return redirect()->route('konfirmasi.index')->with('message', 'Selesaikan pesanan terlebih dahulu!');
        }

        $data = $request->validate(
            [
                'payment_method'       => 'required',
                'shipping_cost'        => 'required',
            ],
            [
                'payment_method.required' => 'Metode pembayaran wajib disi',
                'shipping_cost.required' => 'Ongkos kirim wajib disi',
            ],
        );

        $data['product_price'] = auth()->user()->carts()->sum('price');
        $data['total']         = $data['product_price'] + $request->shipping_cost;
        $products              = [];
        $data['carts']         = auth()->user()->carts()->latest()->get();

        // foreach (auth()->user()->carts()->with('product')->latest()->get() as $cart) {
        //     $data['products'] =  array_push($products, $cart->product()->get()) ;
        // }

        // Cek apakah products ada atau tidak
        if (auth()->user()->carts()->count() == 0) {
            return back()->with('message', 'anda tidak memiliki barang di kerangjang');
        }

        $request->user()->checkouts()->create($data);

        return redirect()->route('konfirmasi.index');
    }
}
