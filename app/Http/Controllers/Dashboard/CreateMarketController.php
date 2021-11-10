<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use function PHPUnit\Framework\returnSelf;

class CreateMarketController extends Controller
{
    public function __invoke()
    {
        // Jika alamat dan no_hp belum ada
        if (auth()->user()->no_hp == null || auth()->user()->address == null ) {
            return redirect()->route('profil.edit')->with('message', 'Lenagkapi alamat dan nomor hp terlebih dahulu');
        }

        // Jika sudah terdaftar menjadi seller
        if (auth()->user()->validation_sellers()->count() > 0) {
            if (auth()->user()->validation_sellers->name == 'Koperasi' &&auth()->user()->validation_sellers->bank != null && auth()->user()->validation_sellers->rekening_number != null && auth()->user()->validation_sellers->rekening_name != null) {
                return redirect()->route('buat-toko.koperasi.selesai');
            } else return redirect()->route('buat-toko.petani.selesai');
        }

        return view('client.dashboard.create-market');
    }
}
