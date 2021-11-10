<?php

namespace App\Http\Controllers\Admin;

use App\Models\{User,  ValidationSeller};
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ValiadationController extends Controller
{
    public function index()
    {
        $validations = ValidationSeller::with('user')->whereHas('user', function($query){
            $query->where('validation', 0)->where('role_id', 4);
        })
        ->latest()
        ->paginate(30);

        return view('admin.validation.validation', compact('validations'));
    }

    public function update(User $user)
    {
        // Cek apakah sebagai koperasi atau Penjual
        if ($user->validation_sellers->name == 'Koperasi') {
            $role = 3;
        } else $role = 2;

        $user->update([
            'validation' => 1,
            'role_id'    => $role,
        ]);

        return redirect()->route('admin.validasi.index')->with('message', 'Data ' . $user->name .' berhasil diverifikasi menjadi '. $user->validation_sellers->name);
    }

    public function destroy($validationId)
    {
        $validation =  ValidationSeller::find($validationId);
        Storage::delete($validation->img);
        $validation->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
