@extends('admin.partials.content', ['title' => 'Data Supplier'])

@section('content')
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Supplier</h3>
              @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ Session::get('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <form action="{{ route('supplier.index') }}" class="mt-4" method="get">
                @csrf
                <div class="row flex-row">
                    <div class="col-md-4">
                        <div class="input-group">    
                            <input type="text" name="search" class="form-control" placeholder="Cari Supplier" aria-label="search" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <input type="submit" value="Cari" class="btn btn-secondary" id="search">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="float-right my-2">
                          <a class="btn btn-success" href="{{ route('supplier.create') }}"> Input Supplier</a>
                      </div>
                    </div>
              </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table-responsive" class="table table-bordered table-hover">
                <thead>
                  <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama Supplier</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($all_supplier as  $supplier)
                <tr>
                 <td>{{($supplier->id)}}</td>
                 <td>{{($supplier->nama_supplier)}}</td>
                 <td>{{($supplier->deskripsi)}}</td>
                 <td><img width="90px" src="/storage/{{$supplier->gambar}}"></td>
                 <td width="250px">
                 <form action="{{ route('supplier.destroy',$supplier->id) }}" method="POST" onsubmit="return confirm('Yakin maw hapusss?? zzzzz ripah')"> 
                    <a class="btn btn-info" href="{{ route('supplier.show',$supplier->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('supplier.edit',$supplier->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
                </tr>
                   @endforeach
            </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $all_supplier->withQueryString()->links() }}
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection