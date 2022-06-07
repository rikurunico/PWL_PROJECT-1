<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){

        $customer = User::where('status', 'customer')->count();
        $supplier = Supplier::all()->count();
        $kategori = Kategori::all()->count();
        $produk = Produk::all()->count();

        return view('dashboard.homepage',[
            'customer' => $customer,
            'supplier' => $supplier,
            'kategori' => $kategori,
            'produk' => $produk
        ]);
}
}