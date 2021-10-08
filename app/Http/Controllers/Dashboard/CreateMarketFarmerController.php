<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateMarketFarmerController extends Controller
{
    public function index()
    {
        return view('client.dashboard.create-market-farmer');
    }
}
