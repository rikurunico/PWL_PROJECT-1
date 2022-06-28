<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Produk;
use App\Models\OrderDetail;
use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('search')){
            $all_order = Order::where('total', 'like', '%'.request('search').'%')
                                    ->orwhere('tanggal_order', 'like', '%'.request('search').'%')
                                    ->paginate(5);
            return view('admin.dataorder', ['all_order'=>$all_order]);
        } else {
            $order = Order::with('user')->get(); // Mengambil semua isi tabel
            $all_order = Order::orderBy('id', 'asc')->paginate(5);
            return view('admin.dataorder', ['order' => $order, 'all_order' => $all_order]);
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // store to order first then store the items on order detail
        // order : {id_order, id_user, total, tgl_order}
        // dd($id);
        // get the cart data
        $all_cart = Cart::with('produk')->where('user_id', $id)->get();
        $total = 0;

        foreach ($all_cart as $cart) {
            $total += (($cart->produk->harga * $cart->qty) - ($cart->produk->harga * $cart->qty * $cart->produk->diskon));
        }

        $order = new Order;
        $order->user_id = $id;
        $order->total = $total;
        $order->tanggal_order = Carbon::now()->toDateTimeString();
        $order->status = 0;

        $order->save();

        // store the items on cart to order details
        foreach($all_cart as $cart) {
            // {id, produk_id, order_id, qty}
            $OD = new OrderDetail;
            $OD->produk_id = $cart->produk_id;
            $OD->order_id = $order->id;
            $OD->qty = $cart->qty;

            $OD->save();

            // updateing product stock
            $selectedProduk = new Produk;
            $selectedProduk = $cart->produk;
            $selectedProduk->stok -= $OD->qty;

            $selectedProduk->save();
        }

        Cart::with('produk')->where('user_id', $id)->delete();

        return view('customerpage.checkout', compact('order', 'all_cart'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::where('id', $id)->first();

        return view('admin.order.detailOrder',[
            'order' => $order
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function payment(Request $request)
    {
        $all_cart = Cart::where('user_id', auth()->user()->id)->get();
        $data = $request->all();
        $order = Order::find($data['order_id']);

        return view('customerpage.pembayaran', compact('all_cart', 'data', 'order'));
    }
    
}
