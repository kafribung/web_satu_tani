<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->whereHas('role', function($query){
            $query->where('name', 'user');
        })
        ->where('validation', 0)
        ->latest()
        ->paginate(20);
        return view('admin.user.user', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.user.index')->with('message', 'Data user '. $user->name .' berhasil dihapus');
    }
}
