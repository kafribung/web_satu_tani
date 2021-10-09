<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function index()
    {
        $farmers = User::with('role')->whereHas('role', function($query){
            $query->where('name', 'petani');
        })
        ->latest()
        ->paginate(20);
        return view('admin.farmer.farmer', compact('farmers'));
    }

    public function update(User $petani)
    {

    }
}
