<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Checkout;
use App\Http\Controllers\Controller;

class OrderanFinishController extends Controller
{
    public function __invoke()
    {
        $checkouts = Checkout::where([
            ['user_id', auth()->id()],
            ['status', 'selesai'],
        ])->get();
        return view('client.dashboard.orderan-finish', compact('checkouts'));
    }
}
