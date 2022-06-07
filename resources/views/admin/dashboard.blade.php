@extends('admin.partials.content' , ['title' => 'Dashboard'])

{{-- @section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 col-6">
            <div class="card text-white bg-primary mb-3" style="border-radius: 0.5rem;">
            <div class="card-body" style="padding: 2rem 0 0 0;">
                <div class="text-center">
                    <i class="fas fa-2x fa-list-alt mb-2" id="cardIcon"></i>
                </div>
                <h5 class="card-text text-center">Total Supplier</h5>
                    <p class="text-center"><b>{{ $supplier }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-6">
            <div class="card text-white bg-info mb-3" style="border-radius: 0.5rem;">
            <div class="card-body" style="padding: 2rem 0 0 0;">
                <div class="text-center">
                    <i class="fa fa-2x fa-users mb-2" id="cardIcon"></i>
                </div>
                <h5 class="card-text text-center">Total Kategori</h5>
                    <p class="text-center"><b>{{ $kategori }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-6">
            <div class="card text-white bg-danger mb-3" style="border-radius: 0.5rem;">
            <div class="card-body" style="padding: 2rem 0 0 0;">
                <div class="text-center">
                    <i class="fa fa-2x fa-user mb-2" id="cardIcon"></i>
                </div>
                <h5 class="card-text text-center">Total Produk</h5>
                    <p class="text-center"><b>{{ $produk }}</b></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-6">
            <div class="card text-white bg-success mb-3" style="border-radius: 0.5rem;">
            <div class="card-body" style="padding: 2rem 0 0 0;">
                <div class="text-center">
                    <i class="fas fa-2x fa-prescription-bottle-alt mb-2" id="cardIcon"></i>
                </div>
                <h5 class="card-text text-center">Total User</h5>
                    <p class="text-center"><b>{{ $customer }}</b></p>
                </div>
            </div>
        </div>
  </div>

</div>
@endsection --}}