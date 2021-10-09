<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\AdminRequest;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::with('role')->whereHas('role', function($query){
            $query->where('name', 'Admin');
        })->paginate(5);

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

    public function show()
    {
        return abort('404');
    }

    public function edit(User $admin)
    {
        return view('admin.admin.edit', compact('admin'));
    }

    public function update(AdminRequest $request, User $admin)
    {
        $data = $request->validated();

        $admin->update($data);

        return redirect()->route('admin.admin.index')->with('message', 'Data admin'. $admin->name .'berhasil diubah');
    }

    public function destroy(User $admin)
    {
        $admin->delete();

        return redirect()->route('admin.admin.index')->with('message', 'Data admin'. $admin->name .'berhasil dihapus');
    }
}
