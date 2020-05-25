@extends('themplate.master')

@section('title', 'Kategori')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Kategori')

@section('content')
<div class="col-12">
    <div class="row mb-2">
        <div class="col-sm-2">
        <a href="/admin/kategori/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Kategori</button></a>
        </div>
    </div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Kategori</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kategroi</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($kategori as $kategoridata)

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $kategoridata->kategori}}</td>
                    <td>
                        <a href="/admin/kategori/edit/{{ $kategoridata->id }}" data-toggle="tooltip" title="Edit Kategori" > <i class="far fa-edit"></i></a>
                        <a href="/admin/kategori/delete/{{ $kategoridata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus Kategori"></i></a>

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kategroi</th>
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
