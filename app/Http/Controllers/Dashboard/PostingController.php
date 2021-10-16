<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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
        $request->validate([
            'img_1' => ['required', 'mimes:jpg,jpeg', 'max:2048'],
            'img_2' => ['required', 'mimes:jpg,jpeg', 'max:2048'],
            'img_3' => ['required', 'mimes:jpg,jpeg', 'max:2048'],
            'img_4' => ['required', 'mimes:jpg,jpeg', 'max:2048'],
            'img_5' => ['required', 'mimes:jpg,jpeg', 'max:2048'],

            'name'          => ['required', 'string', 'min:5', 'max:20'],
            'description'   => ['required'],
            'harvest_time'  => ['required','date'],
            'price'         => ['required','numeric'],
            'stock'         => ['required','numeric'],
            'discount'      => ['numeric'],
        ]);
    }
}
