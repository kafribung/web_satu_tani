<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Checkout;
use App\Http\Controllers\Controller;


class OrderanController extends Controller
{
    public function __invoke()
    {
        $checkouts = Checkout::where([
            ['user_id', auth()->id()],
            ['status', 'menunggu pembayaran'],
            ['payment_method', 'transfer'],
        ])->get();
        return view('client.dashboard.orderan', compact('checkouts'));
    }
}
