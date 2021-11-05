<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class OrderanController extends Controller
{
    public function index()
    {
        // $checkout  = Checkout::where('user_id', auth()->id);
        $checkouts = Checkout::where([
            ['user_id', auth()->id()],
            ['status', 'menunggu pembayaran'],
            ['status', 'menunggu pembayaran'],
            ['payment_method', 'transfer'],
        ])->get();
        return view('client.dashboard.orderan', compact('checkouts'));
    }
}
