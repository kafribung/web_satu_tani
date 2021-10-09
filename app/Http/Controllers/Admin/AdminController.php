<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
