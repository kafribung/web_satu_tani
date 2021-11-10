<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Checkout;
use App\Http\Controllers\Controller;


class OrderanController extends Controller
{
    public function __invoke()
    {
        // Jika user sudah memiliki pesanan
        if (auth()->user()->checkouts()->whereIn('status', ['menunggu konfirmasi'])->count() > 0) {
            return redirect()->route('konfirmasi.index')->with('message', 'Anda tidak dapat melihat orderan, selama pesanan belum dikonfirmasi');
        }

        $checkouts = Checkout::where([
            ['user_id', auth()->id()],
            ['status', 'menunggu pembayaran'],
            ['payment_method', 'transfer'],
        ])->get();
        return view('client.dashboard.orderan', compact('checkouts'));
    }
}
