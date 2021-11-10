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

    public function destroy(User $user)
    {
        if ($user->products()->count() > 0 || $user->carts()->count() > 0 || $user->checkouts()->count() > 0) {
            return back()->with('message', 'Data petani '. $user->name .' tidak dapat di hapus dihapus');
        }

        $user->delete();

        return redirect()->route('admin.admin.index')->with('message', 'Data petani '. $user->name .' berhasil dihapus');
    }
}
