<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\User;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CustomerPageController extends Controller
{
    public function produk($keyword){
     
        $aktif = '';
    
        if ($keyword == 'ld') {
            $aktif = 'ld';
        } else if ($keyword == 'la') {
            $aktif = 'la';
        } else if ($keyword == 'pd') {
            $aktif  = 'pd';
        } else {
            $aktif = 'pa';
        }

        $category = Kategori::where('nama_kategori', '=', $keyword)->first();
        $all_cart = Cart::all()->where('user_id',Auth::user()->id);
        
        $data = Produk::with('kategori')
            ->where('kategori_id', '=', $category->id)
            ->paginate(
                $perPage = 6, $columns = ['*'], $pageName = $keyword
            );
        return view('customerpage.produk')
        ->with('title', 'Dz Fashion - Produk')
        ->with('all_produk', $data)
        ->with('all_cart', $all_cart)
        ->with('active', $aktif);
    }
    public function search(Request $request) {
        $keyword = $request->cari;
        
        $data= Produk::where('nama_produk', 'like', '%' . $keyword . '%')->paginate(6);
        return view('customerpage.produk')
        ->with('title', 'Dz Fashion - Produk')
        ->with('all_produk', $data);
    }

    public function supplier(){
    $all_supplier = Supplier::all();
    $all_cart = Cart::all()->where('user_id',Auth::user()->id);

    return view('customerpage.supplier')
    ->with('title', 'Dz Fashion - Supplier')
    ->with('all_supplier', $all_supplier)
    ->with('all_cart', $all_cart);
}
    public function profil()
    {
        $all_cart = Cart::all()->where('user_id',Auth::user()->id);
        return view('customerpage.profil', [
            'title' => 'Dz Fashion - Profil Customer',
            'user' => Auth::user(),
            'all_cart'=> $all_cart
            
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $validateData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto_profil' => 'image|file',
        ]);

        // dd($validateData);
        $user = User::findOrFail($id);
        // dd($request->foto_profil);
        if ($request->hasFile('foto_profil')) {
            if ($user->foto && file_exists(storage_path('app/public/storage/'.$user->foto_profil))) {
                Storage::delete('public/'.$user->foto_profil);
            }
            $image_name = $request->file('foto_profil')->store('images','public');
            $user->foto_profil = $image_name;
            // dd($image_name);
            $validateData['foto_profil'] = $image_name;
        }
        User::where('id', $id)
            ->update($validateData);
            
        return redirect()->route('profile')->with('success', 'Profil telah diupdate!');
    }
    public function index()
    {
        $auth = Auth::user();
        $all_produk = Produk::with('kategori')->paginate(5);
        $all_cart = Cart::all()->where('user_id',Auth::user()->id);
        return view('customerpage.produk',[
            'auth' => $auth,
            'all_produk' => $all_produk,
            'all_cart' => $all_cart
        ]);
    }
        public function detail($id)
        {
        $produk = Produk::where('id', $id)->first();
        $all_cart = Cart::all()->where('user_id',Auth::user()->id);
            return view('customerpage.detailproduk',[
            'title' => 'Dz Fashion - Detail Produk',
                'produk' => $produk,
                'all_cart' => $all_cart,
                'kategori' => Kategori::all(),
                'related' => Produk::where('kategori_id', $produk->kategori_id)->take(3)->get()->except($produk->id),
            ]);
        }
}