<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ValidationSeller;
use Illuminate\Http\Request;

class CreateMarketFarmerController extends Controller
{
    public function index()
    {
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
