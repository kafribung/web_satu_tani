<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ValidationSeller;
use Illuminate\Http\Request;

class ValiadationController extends Controller
{
    public function index()
    {
        $validations = ValidationSeller::with('user')->latest()->paginate(30);
        return view('admin.validation.validation', compact('validations'));
    }
}
