<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CooperativeController extends Controller
{
    public function index()
    {
        $coperatives = User::with('role')->whereHas('role', function($query){
            $query->where('name', 'koperasi');
        })
        ->where('validation', 1)
        ->latest()
        ->paginate(20);
        return view('admin.cooperative.cooperative', compact('coperatives'));
    }

}
