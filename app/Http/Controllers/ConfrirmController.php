<?php

namespace App\Http\Controllers;

use App\Models\{Cart, Checkout};
use Illuminate\Http\Request;

class ConfrirmController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->checkouts()->count() == 0) {
            return redirect('/')->with('message', 'anda tidak memiliki barang di kerangjang');
        }
        $checkout = $request->user()->checkouts()->where('status', 'menunggu konfirmasi')->first();
        return view('client.konfirmasi.konfirmasi', compact('checkout'));
    }

    public function update(Request $request, Checkout $checkout)
    {
        $checkout->update([
            'status' => 'menunggu pembayaran'
        ]);

        $request->user()->carts()->truncate();

        return redirect()->route('pesanan.index');
    }
}
