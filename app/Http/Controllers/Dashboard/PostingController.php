<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    {
        return view('client.dashboard.posting');
    }

    public function create()
    {
        return view('client.dashboard.posting');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            // 'max:2048'
            // 'max:2048'
            // 'max:2048'
            // 'max:2048'
            // 'max:2048'
                'img_1' => ['required', 'image',],
                'img_2' => ['required', 'image',],
                'img_3' => ['required', 'image',],
                'img_4' => ['required', 'image',],
                'img_5' => ['required', 'image',],

                'name'          => ['required', 'string', 'min:5', 'max:20'],
                'description'   => ['required'],
                'harvest_time'  => ['required','date'],
                'price'         => ['required','numeric'],
                'stock'         => ['required','integer', 'size:200'],
                'discount'      => ['numeric'],
            ]);
        $data['product_group_id'] = 1;

        $img_1 = $request->file('img_1');
        $data['img_1'] = $img_1->storeAs('product_images', mt_rand(). '.' .$img_1->extension());

        $img_2 = $request->file('img_2');
        $data['img_2'] = $img_2->storeAs('product_images', mt_rand(). '.' .$img_2->extension());

        $img_3 = $request->file('img_3');
        $data['img_3'] = $img_3->storeAs('product_images', mt_rand(). '.' .$img_3->extension());

        $img_4 = $request->file('img_4');
        $data['img_4'] = $img_4->storeAs('product_images', mt_rand(). '.' .$img_4->extension());

        $img_5 = $request->file('img_5');
        $data['img_5'] = $img_5->storeAs('product_images', mt_rand(). '.' .$img_5->extension());

        $request->user()->products()->create($data);

        return back()->with('message', 'Product berhasil ditambahkan');
    }


}
