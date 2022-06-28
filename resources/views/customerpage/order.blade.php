@extends('customerpage.partials.content', ['title' => 'Dz Fashion - My Orders'])
@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Diza Fashion</p>
                    <h1>My Orders</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="btn-group col-lg-12 mb-4" role="group" aria-label="Basic example">
                <a class="btn btn-outline-info {{ Request::is('process')? 'active'  : ''}}"
                    href="#"><strong>Belum Terverifikasi</strong> </a>
                <a class="btn btn-outline-success {{ Request::is('history_order')? 'active'  : ''}}"
                    href="#"><strong>Terverifikasi</strong> </a>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head" height="58px">
                            <tr>
                                <th class="text-center">Foto Produk</th>
                                <th class="text-center">Nama Produk</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Pembayaran</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($order)) 
                            @foreach ($order as $order)
                            <tr class="table-body-row">
                                <td class="product-image"><img width="90px" src="/storage/{{$order -> produk -> foto_produk}}"></td>
                                <td class="product-name">{{ $order -> order_detail -> produk -> nama_produk }}</td>
                                <td class="product-price">Rp. {{ number_format($order -> order_detail -> harga) }}</td>
                                <td class="product-price">{{ $order -> quantity }}</td>
                                <td class="product-price">
                                    <img src="/storage/{{ $orders->pembayaran }}
                                        alt=""  width="100px">
                                </td>
                                <td class="product-total">Rp. {{ number_format($order -> total) }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr class="text-black text-center">
                                <td colspan="7">
                                    {{-- <h3>Anda belum memesan product</h3> --}}
                                    <h5>Belum ada pesanan yang telah dicheckout, <a href="{{ route('cart.index') }}">Selesaikan
                                            pembayaran!</a></h5>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->
@endsection