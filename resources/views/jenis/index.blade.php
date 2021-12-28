@extends('layouts.app')
@section('header')
Admin - Jenis Barang
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
                    
                  </thead>
                  <tbody>
                  @foreach ($jenis as $jns)
                    <tr>
                      <td> {{ $jns->kode_barang}} </td>
                      <td> {{ $jns->jenis_barang}} </td>
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