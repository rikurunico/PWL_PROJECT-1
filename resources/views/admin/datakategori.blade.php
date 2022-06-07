@extends('admin.partials.content', ['title' => 'Data Kategori'])

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>
                <div class="float-right my-2">
                  <a class="btn btn-success" href="{{ route('kategori.create') }}"> Input Kategori</a>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="table-responsive" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($all_kategori as $kategori)
                  <tr>
                   <td>{{($kategori->id)}}</td>
                   <td>{{($kategori->nama_kategori)}}</td>
                   <td>{{($kategori->keterangan)}}</td>
                   <td width="300px">
                   <form action="{{ route('kategori.destroy',$kategori->id) }}" method="POST"> 
                      <a class="btn btn-info" href="{{ route('kategori.show',$kategori->id) }}">Show</a>
                      <a class="btn btn-primary" href="{{ route('kategori.edit',$kategori->id) }}">Edit</a>
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
                {{ $all_kategori->links()}}
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