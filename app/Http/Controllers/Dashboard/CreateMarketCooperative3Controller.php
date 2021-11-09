<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class CreateMarketCooperative3Controller extends Controller
{
    public function __invoke()
    {
        // Jika belum mengisi tahap awal
        if (auth()->user()->validation_sellers()->count() == 0) {
            return redirect()->route('buat-toko.petani');
        }

        // Jika belum mengisi tahap 2
        if (auth()->user()->validation_sellers->bank == null && auth()->user()->validation_sellers->rekening_number == null && auth()->user()->validation_sellers->rekening_name == null)
            return redirect()->route('buat-toko.koperasi');

        return view('client.dashboard.create-market-cooperative-3');
    }
}
