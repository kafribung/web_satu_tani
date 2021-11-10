<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use function PHPUnit\Framework\returnSelf;

class CreateMarketController extends Controller
{
    public function __invoke()
    {
        // Jika sudah terdaftar menjadi seller
        if (auth()->user()->validation_sellers()->count() > 0) {
            if (auth()->user()->validation_sellers->bank != null && auth()->user()->validation_sellers->rekening_number != null && auth()->user()->validation_sellers->rekening_name != null) {
                return redirect()->route('buat-toko.koperasi.selesai');
            }
        }

        return view('client.dashboard.create-market');
    }
}
