<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\PostingFarmerRequest;
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

    public function store(PostingFarmerRequest $request)
    {
        $data = $request->validated();

        // Jika login sebagai petani atau koperasi ganti type produk
        if (auth()->user()->role_id == 2) {
            $data['product_group_id'] = 1;
        } else $data['product_group_id'] = 2;

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

        // Cek slug kalau sama tambhakan pembeda
        $data['slug'] = Str::slug($request->name);
        if (Product::where('slug', $data['slug'])->first() != null) {
            $data['slug'] .= '-'.mt_rand();
        }

        // Jika diskon tidak diisi
        if ($request->discount == null) {
            $data['discount'] = 0;
        }

        $request->user()->products()->create($data);

        return redirect('posting')->with('message', 'Product berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('client.dashboard.posting-create', compact('product'));
    }

    public function update(PostingFarmerRequest $request, Product $product)
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
        // Produk tidak dapat dihapus
        if ($product->carts()->count() > 0) {
            return redirect('posting')->with('message', 'Product gagal dihapus');
        }

        Storage::delete($product->img_1);
        Storage::delete($product->img_2);
        Storage::delete($product->img_3);
        Storage::delete($product->img_4);
        Storage::delete($product->img_5);


        $product->delete();
        return redirect('posting')->with('message', 'Product berhasil dihapus');
    }
}
