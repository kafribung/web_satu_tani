<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Http\Controllers\Controller;

class FinishPaymentController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('user')
                    ->where('status', 'selesai')
                    ->latest()
                    ->paginate(30);

        return view('admin.finish-payment.finish-payment' ,compact('checkouts'));
    }
}
