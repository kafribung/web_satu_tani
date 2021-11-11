<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateMarketFarmer2Controller extends Controller
{
    public function index()
    {
        // Jika belum mengisi tahap awal
        if (auth()->user()->validation_sellers()->count() == 0) {
            return redirect()->route('buat-toko.petani');
        }

        // Jika sudah mendaftar menjadi seller
        if (auth()->user()->validation_sellers()->count() > 0) {
            if (auth()->user()->validation_sellers->name == 'Petani' && auth()->user()->validation_sellers->bank != null && auth()->user()->validation_sellers->rekening_number != null && auth()->user()->validation_sellers->rekening_name != null) {
                return redirect()->route('buat-toko.petani.selesai');
            }
        }

        // Jika yang login petani
        if (auth()->user()->validation_sellers->name == "Koperasi") {
            return redirect()->route('buat-toko.koperasi.lengkapi-info');
        }

        $user = auth()->user();
        return view('client.dashboard.create-market-farmer-2', compact('user'));
    }

    public function update(Request $request)
    {
        $data =  $request->validate([
            'bank'            => 'required|string|min:3|max:7|unique:validation_sellers,rekening_number',
            'rekening_number' => 'required|numeric|min:10',
            'rekening_name'   => 'required|string',
        ]);

        auth()->user()->validation_sellers()->update($data);

        return redirect('buat-toko/petani/selesai');
    }
}
