<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\AdminRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::with('role')->whereHas('role', function($query){
            $query->where('name', 'Admin');
        })->get();

        return view('admin.admin.admin', compact('admins'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(AdminRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);
        $data['role_id']  = 1;

        User::create($data);

        return redirect()->route('admin.admin.index')->with('message', 'Data admin berhasil ditambahkan');
    }
}
