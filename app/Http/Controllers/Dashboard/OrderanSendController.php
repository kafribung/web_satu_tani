<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Checkout;
use App\Http\Controllers\Controller;

class OrderanSendController extends Controller
{
    public function __invoke()
    {
        $checkouts = Checkout::where([
            ['user_id', auth()->id()],
            ['status', 'dikirim'],
        ])->get();
        return view('client.dashboard.orderan-send', compact('checkouts'));
    }
}
