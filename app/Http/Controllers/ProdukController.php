<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
// use PDF; 

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if (request('search')){
        $all_produk = Produk::where('nama_produk', 'like', '%'.request('search').'%')
                                ->orWhere('kategori_id', 'like', '%'.request('search').'%')
                                ->paginate(
                                    $perPage = 5, $columns = ['*'], $pageName = 'produk'
                                );
        return view('admin.dataproduk', ['all_produk'=>$all_produk]);
    } else {
        $produk = Produk::with('kategori')->get(); // Mengambil semua isi tabel
        $all_produk = Produk::orderBy('id', 'asc')->paginate(5);
        return view('admin.dataproduk', ['produk' => $produk, 'all_produk' => $all_produk]);
        
    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_kategori = Kategori::all();
        $all_supplier = Supplier::all();
        return view('admin.produk.createProduk',[
            'all_kategori' => $all_kategori,
            'all_supplier' => $all_supplier
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'foto_produk' => 'nullable',
            'harga' => 'required',
            'stok' => 'required',
            'diskon' => 'nullable',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'supplier_id' => 'required',
        ]);

        if($request->file('foto_produk')){
            $validatedData['foto_produk'] = $request->file('foto_produk')->store('images', 'public');
        }

        Produk::create($validatedData);

        return redirect()->route('produk.index')
        ->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::where('id', $id)->first();

        return view('admin.produk.detailProduk',[
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::where('id', $id)->first();
        $all_kategori = Kategori::all();
        $all_supplier = Supplier::all();
        return view('admin.produk.editProduk',[
            'produk' => $produk,
            'all_kategori' => $all_kategori,
            'all_supplier' => $all_supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $rules= [
            'nama_produk' => 'required',
            'foto_produk' => 'nullable',
            'harga' => 'required',
            'stok' => 'required',
            'diskon' => 'nullable',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'supplier_id' => 'required',
        ];
        $validatedData = $request->validate($rules);
        if($request->file('foto_produk')){
            $validatedData['foto_produk'] = $request->file('foto_produk')->store('images', 'public');
        }

        Produk::where('id', $produk->id)
        ->update($validatedData);

        return redirect()->route('produk.index')
        ->with('success', 'Produk berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        if (File::exists('storage/'.$produk->foto_produk)) {
            File::delete('storage/'.$produk->foto_produk);
        }

        Produk::find($produk->id)->delete();
        return redirect()->route('produk.index')
            ->with('success','Produk berhasil dihapus');

     }
     
     public function cetak_pdf(){
        $all_produk = Produk::paginate(5);
        $pdf = PDF::loadview('admin.produk_cetakPdf',['all_produk'=>$all_produk]);
        return $pdf->stream();
        // return view ('admin.produk_cetakPdf',['all_produk'=>$all_produk]);
    //     $pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'isPhpEnabled' => true, 'isRemoteEnabled' =>true
    // ]);
        // return $pdf->download('Laporan_DataBarang.pdf');

     }
}
