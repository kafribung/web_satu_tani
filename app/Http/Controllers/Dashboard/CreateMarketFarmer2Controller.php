<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateMarketFarmer2Controller extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('client.dashboard.create-market-farmer-2', compact('user'));
    }

    public function update(Request $request)
    {
        $data =  $request->validate([
            'bank'            => 'required|string|min:3|max:7',
            'rekening_number' => 'required|numeric|min:10',
            'rekening_name'   => 'required|string',
        ]);

        auth()->user()->validation_sellers()->update($data);

        return redirect('buat-toko/petani/selesai');
    }
}
