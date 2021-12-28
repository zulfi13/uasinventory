@extends('layouts.app')
@section('header')
Admin - Data Barang
@endsection
@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama Barang</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Tanggal Produksi</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Platform(s): activate to sort column ascending">Tanggal Expired</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Engine version: activate to sort column ascending">Stok</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="CSS grade: activate to sort column ascending">Harga</th></tr>
                  </thead>
                  <tbody>
                  @foreach ($barang as $brg)
                    <tr>
                      <td> {{ $brg->nama_barang}} </td>
                      <td> {{ $brg->tanggal_produksi}} </td>
                      <td> {{ $brg->tanggal_expired}} </td>
                      <td> {{ $brg->stok}} </td>
                      <td> {{ $brg->harga}} </td>
                    </tr>
                  @endforeach
                  </tbody>
                 
</table>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
@endsection