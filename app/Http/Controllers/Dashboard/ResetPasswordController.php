<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class ResetPasswordController extends Controller
{
    public function edit()
    {
        return view('client.dashboard.reset-password');
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'password'        => ['required', 'string', 'min:8'],
            'password_new'    => ['required', 'string', 'min:8'],
        ]);

        if (Hash::check($request->password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => bcrypt($request->password_new)
            ]);
            Auth::logout();
            session()->flash('message', 'Kata sandi berhasil diubah');
            return redirect('/login');
        } else return redirect('reset-password')->withErrors(['password' => 'Kata sandi tidak sesuai']);
    }
}
