<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class ConfrirmController extends Controller
{
    public function __invoke(Request $request)
    {
        $checkout = $request->user()->checkouts()->where('status', 'menunggu konfirmasi')->first();
        return view('client.konfirmasi.konfirmasi', compact('checkout'));
    }
}
