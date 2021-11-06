<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Checkout;
use App\Http\Controllers\Controller;

class OrderanProcessController extends Controller
{
    public function __invoke()
    {
        $checkouts = Checkout::where([
            ['user_id', auth()->id()],
            ['status', 'diproses'],
        ])->get();
        return view('client.dashboard.orderan-process', compact('checkouts'));
    }
}
