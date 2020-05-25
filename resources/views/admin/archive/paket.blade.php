@extends('themplate.master')

@section('title', 'Paket Iklan')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Paket Iklan')

@section('content')
<div class="col-12">
    <div class="row mb-2">
        <div class="col-sm-2">
        <a href="/admin/ads/paket/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Kategori</button></a>
        </div>
    </div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Paket</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Thumbnail</th>
                    <th>Jenis Paket</th>
                    <th>Harga Paket</th>
                    <th>Deskripsi</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($paket as $paketdata)

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $paketdata->nama_paket}}</td>
                    <td><img src="/ads_data_gambar/{{ $paketdata->gambar }}" width="100px" ></td>

                    <td>{{ $paketdata->jenis_paket}}</td>
                    <td>{{ $paketdata->harga}}</td>
                    <td>{{ $paketdata->deskripsi}}</td>
                    <td>
                        <a href="/admin/ads/paket/edit/{{ $paketdata->id }}" data-toggle="tooltip" title="Edit Paket" > <i class="far fa-edit"></i></a>
                        <a href="/admin/ads/paket/delete/{{ $paketdata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus Paket"></i></a>

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Thumbnail</th>
                    <th>Jenis Paket</th>
                    <th>Harga Paket</th>
                    <th>Deskripsi</th>
                    <th>OPSI</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
<!-- /.col -->
@endsection
@section('js')
  <!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') !!}">

@stop

@section('js2')

  <!-- DataTables -->
  <script src="{!! asset('assets/adminlte/plugins/datatables/jquery.dataTables.js') !!}"></script>
  <script src="{!! asset('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') !!}"></script>
    <!-- page script -->
  <script>
    $(function () {

      $('#data').DataTable();
      // $('#data').DataTable({
      //   "paging": true,
      //   "lengthChange": false,
      //   "searching": false,
      //   "ordering": true,
      //   "info": true,
      //   "autoWidth": false,
      // });
    });
@stop
