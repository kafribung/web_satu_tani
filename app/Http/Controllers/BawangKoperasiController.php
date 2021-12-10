<?php

namespace App\Http\Controllers;

use App\Models\Product;
class BawangKoperasiController extends Controller
{
    public function index()
    {
        $bawangKoperasis = Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Koperasi');
                        })
                        ->where('stock', '!=', 0)
                        ->where('stock', '>', 20)
                        ->inRandomOrder()
                        ->paginate(24);
        return view('client.bawang-koperasi.index', compact('bawangKoperasis'));
    }

    public function show($slug)
    {
        $bawangKoperasi = Product::where('slug', $slug)
                            ->where('stock', '!=', 0)
                            ->first();
        // Jika bawang koperasi stoknya ada
        if ($bawangKoperasi) {
            $bawangKoperasis= Product::with(['product_group', 'user'])
                            ->whereHas('product_group', function($query){
                                $query->where('name', 'Koperasi');
                            })
                            ->where('id', '!=', $bawangKoperasi->id)
                            ->where('stock', '!=', 0)
                            ->where('stock', '>', 20)
                            ->inRandomOrder()
                            ->limit(32)
                            ->get();
            return view('client.bawang-koperasi.show', compact('bawangKoperasi', 'bawangKoperasis'));
        } else return redirect()->route('bawang-koperasi.index');
    }
}
