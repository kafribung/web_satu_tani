<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Http\Controllers\Controller;

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

        return back()->with('message', 'Barang telah dikirim ke '. $checkout->user->name .' dan list pembayaran dipindahkan ke selesai');
    }
}
