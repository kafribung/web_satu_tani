<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        if ($search = urlencode($request->input('search'))  && $request->input('category')) {
            if ($request->input('category') == 1) {
                $bawangPetanis = Product::with(['product_group', 'user'])
                                ->whereHas('product_group', function($query){
                                    $query->where('name', 'Eceran');
                                })
                                ->where('stock', '!=', 0)
                                ->where('name', 'like', '%'.$request->input('search').'%')
                                ->inRandomOrder()
                                ->paginate(24);
                return view('client.bawang-petani.index', compact('bawangPetanis'));
            } else {
                $bawangKoperasis = Product::with(['product_group', 'user'])
                                ->whereHas('product_group', function($query){
                                    $query->where('name', 'Koperasi');
                                })
                                ->where('stock', '!=', 0)
                                ->where('stock', '>', 20)
                                ->where('name', 'like', '%'.$request->input('search').'%')
                                ->inRandomOrder()
                                ->paginate(24);
                return view('client.bawang-koperasi.index', compact('bawangKoperasis'));
            }
        } else {
            $bawangPetanis = Product::with(['product_group', 'user'])
                            ->whereHas('product_group', function($query){
                                $query->where('name', 'Eceran');
                            })
                            ->where('stock', '!=', 0)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();
            $bawangKoperasis = Product::with(['product_group', 'user'])
                            ->whereHas('product_group', function($query){
                                $query->where('name', 'Koperasi');
                            })
                            ->where('stock', '!=', 0)
                            ->where('stock', '>', 20)
                            ->inRandomOrder()
                            ->limit(4)
                            ->get();
            return view('client.home.home', compact('bawangPetanis', 'bawangKoperasis'));
        }

    }
}
