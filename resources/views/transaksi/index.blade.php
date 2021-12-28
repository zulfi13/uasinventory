@extends('layouts.app')
@section('header')
Admin - Data Transaksi
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
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"  aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Tanggal Transaksi</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Jumlah Barang Masuk</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Browser: activate to sort column ascending">Jumlah Barang Keluar</th>
                    <th class="sorting" tabindex="0" aria-controls="example2"  aria-label="Platform(s): activate to sort column ascending">Total Prndapatan</th>
                    
                  </thead>
                  <tbody>
                  @foreach ($transaksi as $tr)
                    <tr>
                      <td> {{ $tr->tanggal_transaksi}} </td>
                      <td> {{ $tr->jumlah_barang_masuk}}</td>
                      <td> {{ $tr->jumlah_barangkeluar}} </td>
                      <td> {{ $tr->total_pendapatan}} </td>
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