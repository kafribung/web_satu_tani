<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ValidationSeller;
use Illuminate\Http\Request;

class ValiadationController extends Controller
{
    public function index()
    {
        $validations = ValidationSeller::with('users')->latest()->get();
        return view('admin.validation.validation', compact('validations'));
    }
}
