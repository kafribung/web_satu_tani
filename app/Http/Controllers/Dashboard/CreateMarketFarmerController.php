<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ValidationSeller;
use Illuminate\Http\Request;

class CreateMarketFarmerController extends Controller
{
    public function index()
    {
        // Jika sudah mengisi gambar
        if (auth()->user()->validation_sellers()->count() > 0)
            if (auth()->user()->validation_sellers->img != null)
            return redirect()->route('buat-toko.petani.lengkapi-info');

        return view('client.dashboard.create-market-farmer');
    }

    public function store_img(Request $request)
    {
        $request->validate([
            'img' => ['required', 'mimes:png,jpg,jpeg', 'max:2048']
        ]);

        $img = $request->file('img');
        $img = $img->storeAs('verification_images',  time() . '.' . $img->extension());

        ValidationSeller::create([
            'name' => 'Petani',
            'img'  => $img,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('buat-toko.petani.lengkapi-info');
    }

}
