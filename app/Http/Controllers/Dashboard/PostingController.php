<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index()
    {
        dd('hard');
        return view('client.dashboard.posting');
    }

    public function store(Request $request)
    {

    }
}
