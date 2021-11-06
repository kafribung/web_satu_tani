<?php

namespace App\Http\Controllers\Admin;

use App\Models\{User,  ValidationSeller};
use App\Http\Controllers\Controller;

class ValiadationController extends Controller
{
    public function index()
    {
        $validations = ValidationSeller::with('user')->whereHas('user', function($query){
            $query->where('validation', 0)->where('role_id', 4);
        })
        ->latest()
        ->paginate(30);

        dd($validations);
        return view('admin.validation.validation', compact('validations'));
    }

    public function update(User $user)
    {
        $user->update([
            'validation' => 1,
            'role_id'    => 2,
        ]);

        return redirect()->route('admin.validasi.index')->with('message', 'Data ' . $user->name .' berhasil diverifikasi menjadi '. $user->validation_sellers->name);
    }
}
