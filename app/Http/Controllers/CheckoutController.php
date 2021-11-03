<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('client.pembayaran.pembayaran');
    }

    public function store(Request $request)
    {
        // Jika user sudah memiliki pesanan
        if ($request->user()->checkouts()->where('status', 'menunggu konfirmasi')->count() > 0) {
            return redirect()->route('konfirmasi.index')->with('message', 'Anda tidak dapat melakukan pembelilan, selama pesanan belum selesai');
        }

        $data = $request->validate(
            [
                'payment_method'       => 'required',
                'shipping_cost' => 'required',
            ],
            ['payment_method.required' => 'Metode pembayaran wajib disi', 'shipping_cost.required' => 'Ongkos kirim wajib disi'],
        );

        $data['product_price'] = auth()->user()->carts()->sum('price');
        $data['total']         = $data['product_price'] + $request->shipping_cost;
        $data['status']        = 'menunggu konfirmasi';
        $data['products']       = auth()->user()->carts()->latest()->get();

        $request->user()->checkouts()->create($data);

        return redirect()->route('konfirmasi.index');
    }
}
