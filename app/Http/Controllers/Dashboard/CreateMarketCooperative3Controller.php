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
        if (auth()->user()->validation_sellers()->where([
            ['img', null],
            ['bank', null],
            ['rekening_number', null],
            ['rekening_name', null],
        ])->first() == null) {
            return redirect()->route('buat-toko.petani');
        }

        return view('client.dashboard.create-market-cooverative-3');
    }
}
