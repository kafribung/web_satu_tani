<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('client.pembayaran.pembayaran');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'payment'       => 'required',
                'shipping_cost' => 'required',
            ],
            ['payment.required' => 'Metode pembayaran wajib disi'],
            ['shipping_cost.required' => 'Ongkos kirim wajib disi']
        );
    }
}
