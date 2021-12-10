<?php

namespace App\Http\Controllers;

use App\Models\Product;
class BawangPetaniController extends Controller
{
    public function index()
    {
        $bawangPetanis = Product::with(['product_group', 'user'])
        ->whereHas('product_group', function($query){
            $query->where('name', 'Eceran');
        })
        ->where('stock', '!=', 0)
        ->inRandomOrder()
        ->paginate(24);
        return view('client.bawang-petani.index', compact('bawangPetanis'));
    }

    public function show($slug)
    {
        $bawangPetani = Product::where('slug', $slug)
                        ->where('stock', '!=', 0)
                        ->first();
        // Jika bawang petani stoknya ada
        if ($bawangPetani) {
            $bawangPetanis = Product::with(['product_group', 'user'])
            ->whereHas('product_group', function($query){
                $query->where('name', 'Eceran');
            })
            ->where('id', '!=', $bawangPetani->id)
            ->where('stock', '!=', 0)
            ->inRandomOrder()
            ->limit(32)
            ->get();
            return view('client.bawang-petani.show', compact('bawangPetani', 'bawangPetanis'));

        } else return redirect()->route('bawang-eceran.index');
    }
}
