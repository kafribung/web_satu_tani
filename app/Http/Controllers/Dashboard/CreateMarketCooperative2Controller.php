<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateMarketCooperative2Controller extends Controller
{
    public function index()
    {
        // Jika alamat dan no_hp belum ada
        if (auth()->user()->no_hp == null || auth()->user()->address == null ) {
            return redirect()->route('profil.edit')->with('message', 'Lenagkapi alamat dan nomor hp terlebih dahulu');
        }

        // Jika belum mengisi tahap awal
        if (auth()->user()->validation_sellers()->count() == 0) {
            return redirect()->route('buat-toko.koperasi');
        }

        if (auth()->user()->validation_sellers()->where([
            ['img', '!=', null],
        ])->first() == null) {
            return redirect()->route('buat-toko.koperasi');
        }

        $user = auth()->user();
        return view('client.dashboard.create-market-cooperative-2', compact('user'));
    }

    public function update(Request $request)
    {
        $data =  $request->validate([
            'no_hp'           => ['required', 'string', 'min:10', 'max:13'],
            'address'         => ['required', 'string'],
            'bank'            => 'required|string|min:3|max:7',
            'rekening_number' => 'required|numeric|min:10',
            'rekening_name'   => 'required|string',
        ]);

        auth()->user()->validation_sellers()->update($data);

        return redirect('buat-toko/cooperative/selesai');
    }
}
