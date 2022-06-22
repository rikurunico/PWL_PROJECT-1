<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        $kategori = Kategori::all()->count();
        $produk = Produk::all()->count();
        $supplier = Supplier::all()->count();

        return view(
            'admin.dashboard',
            [
                'user' => $user,
                'kategori' => $kategori,
                'produk' => $produk,
                'supplier' => $supplier,
            ]
        );
    }
}