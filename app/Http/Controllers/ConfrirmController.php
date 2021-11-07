<?php

namespace App\Http\Controllers;

use App\Models\{Cart, Checkout};
use Illuminate\Http\Request;

class ConfrirmController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->checkouts()->where('status', 'menunggu konfirmasi')->count() == 0 ) {
            return redirect('/')->with('message', 'anda tidak memiliki barang di kerangjang');
        }
        $checkout = $request->user()->checkouts()->whereIn('status', ['menunggu konfirmasi', 'diproses'])->first();
        return view('client.konfirmasi.konfirmasi', compact('checkout'));
    }

    public function update(Request $request, Checkout $checkout)
    {
        // Cek payment method
        if ($checkout->payment_method == 'cod')
            $data['status']  = 'diproses';
        else $data['status'] = 'menunggu pembayaran';

        $checkout->update([
            'status' => $data['status'],
        ]);

        $request->user()->carts()->truncate();

        return redirect()->route('pesanan.index');
    }
}
