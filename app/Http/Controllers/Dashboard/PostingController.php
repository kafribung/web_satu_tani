<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PostingRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class PostingController extends Controller
{
    public function index()
    {
        $products = Product::with('product_group')
                    ->where('user_id', auth()->id())
                    ->where('product_group_id', 1)
                    ->latest()
                    ->paginate(20);
        return view('client.dashboard.posting-index', compact('products'));
    }

    public function create()
    {
        $product = new Product();
        return view('client.dashboard.posting-create', compact('product'));
    }

    public function store(PostingRequest $request)
    {
        $data = $request->validated();
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

        return redirect('posting')->with('message', 'Product berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('client.dashboard.posting-create', compact('product'));
    }

    public function update(PostingRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($img_1 = $request->file('img_1')) {
            Storage::delete($product->img_1);
            $data['img_1'] = $img_1->storeAs('product_images', mt_rand(). '.' .$img_1->extension());
        }

        if ($img_2 = $request->file('img_2')) {
            Storage::delete($product->img_2);
            $data['img_2'] = $img_2->storeAs('product_images', mt_rand(). '.' .$img_2->extension());
        }

        if ($img_3 = $request->file('img_3')) {
            Storage::delete($product->img_3);
            $data['img_3'] = $img_3->storeAs('product_images', mt_rand(). '.' .$img_3->extension());
        }

        if ($img_4 = $request->file('img_4')) {
            Storage::delete($product->img_4);
            $data['img_4'] = $img_4->storeAs('product_images', mt_rand(). '.' .$img_4->extension());
        }

        if($img_5 = $request->file('img_5')){
            Storage::delete($product->img_5);
            $data['img_5'] = $img_5->storeAs('product_images', mt_rand(). '.' .$img_5->extension());
        }

        $product->update($data);

        return redirect('posting')->with('message', 'Product berhasil diperbaruhi');
    }

    public function destroy(Product $product)
    {
        Storage::delete($product->img_1);
        Storage::delete($product->img_2);
        Storage::delete($product->img_3);
        Storage::delete($product->img_4);
        Storage::delete($product->img_5);

        $product->delete();
        return redirect('posting')->with('message', 'Product berhasil dihapus');
    }
}
