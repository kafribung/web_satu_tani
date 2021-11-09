<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\ValidationSeller;
use App\Http\Controllers\Controller;

class CreateMarketCooperativeController extends Controller
{
    public function index()
    {
        // Jika sudah mengisi gambar
        if (auth()->user()->validation_sellers->img != null) return redirect()->route('buat-toko.koperasi.lengkapi-info');

        return view('client.dashboard.create-market-cooperative');
    }

    public function store_img(Request $request)
    {
        $request->validate([
            'img' => ['required', 'mimes:png,jpg,jpeg', 'max:2048']
        ]);

        $img = $request->file('img');
        $img = $img->storeAs('verification_images',  time() . '.' . $img->extension());

        ValidationSeller::create([
            'name' => 'Koperasi',
            'img'  => $img,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('buat-toko.koperasi.lengkapi-info');
    }
}
