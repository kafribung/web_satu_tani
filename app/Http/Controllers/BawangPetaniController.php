<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BawangPetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bawangPetanis = Product::with(['product_group', 'user'])
        ->whereHas('product_group', function($query){
            $query->where('name', 'Eceran');
        })
        ->inRandomOrder()
        ->paginate(24);
        return view('client.bawang-petani.index', compact('bawangPetanis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $bawangPetani = $product;

        $bawangPetanis = Product::with(['product_group', 'user'])
        ->whereHas('product_group', function($query){
            $query->where('name', 'Eceran');
        })
        ->where('id', '!=', $product->id)
        ->inRandomOrder()
        ->limit(4)
        ->get();

        return view('client.bawang-petani.show', compact('bawangPetani', 'bawangPetanis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
