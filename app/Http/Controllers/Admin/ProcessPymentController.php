<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class ProcessPymentController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('user')
                    ->where('status', 'diproses')
                    ->paginate(30);

        return view('admin.process-payment.process-payment' ,compact('checkouts'));
    }

    public function update(Checkout $checkout)
    {
        $checkout->update([
            'status' => 'dikirim',
        ]);

        return back()->with('message', 'Pembayaran atas nama '. $checkout->user->name .' telah diterima, dan barang siap dikirim');
    }
}
