<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class WaitingForPaymentController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('user')
                    ->where('status', 'menunggu pembayaran')
                    ->paginate(30);

        return view('admin.waiting-for-payment.waiting-for-payment', compact('checkouts'));
    }

    public function update(Checkout $checkout)
    {
        $checkout->update([
            'status' => 'diproses',
        ]);

        return back()->with('message', 'Pembayaran atas nama '. $checkout->user->name .' telah diterima, dan bawang siap diproses untuk dikirim');
    }
}
