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
        ->where('validation', 1)
        ->latest()
        ->paginate(20);
        return view('admin.farmer.farmer', compact('farmers'));
    }

    public function destroy(User $coperative)
    {

        dd($coperative);
        $coperative->delete();

        return redirect()->route('admin.admin.index')->with('message', 'Data admin'. $coperative->name .'berhasil dihapus');
    }
}
