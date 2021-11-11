<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Checkout, User, Product};
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $adminCount = User::with('role')
                    ->whereHas('role', function($query){
                        $query->where('name', 'Admin');
                    })
                    ->count();
        $userCount = User::with('role')
                    ->whereHas('role', function($query){
                        $query->where('name', 'user');
                    })
                    ->where('validation', 0)
                    ->count();
        $farmerCount = User::with('role')
                    ->whereHas('role', function($query){
                        $query->where('name', 'petani');
                    })
                    ->where('validation', 1)
                    ->count();
        $coopertiveCount = User::with('role')
                    ->whereHas('role', function($query){
                        $query->where('name', 'koperasi');
                    })
                    ->where('validation', 1)
                    ->count();

        $bawangPetaniCount = Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Eceran');
                        })
                        ->count();

        $bawangKoperasiCount = Product::with(['product_group', 'user'])
                        ->whereHas('product_group', function($query){
                            $query->where('name', 'Koperasi');
                        })
                        ->count();

        $waitCount = Checkout::with('user')
                    ->where('status', 'menunggu pembayaran')
                    ->count();
        $prosesCount = Checkout::with('user')
                    ->where('status', 'diproses')
                    ->count();
        $sendCount = Checkout::with('user')
                    ->where('status', 'dikirim')
                    ->count();
        $finishCount= Checkout::with('user')
                    ->where('status', 'selesai')
                    ->count();


        return view('admin.dashboard.dashboard', compact(
            'adminCount',
            'userCount',
            'farmerCount',
            'coopertiveCount',

            'bawangPetaniCount',
            'bawangKoperasiCount',

            'waitCount',
            'prosesCount',
            'sendCount',
            'finishCount',
        ));
    }
}
