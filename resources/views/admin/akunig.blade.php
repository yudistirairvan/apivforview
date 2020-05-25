@extends('admin.themplate.master')

@section('title', 'Akun IG')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Akun IG')
@section('menudashboard', ' ')
@section('menuakun', 'menu active')
@section('menuuser', ' ')
@section('menupembukuan', ' ')
@section('menusatuan', ' ')
@section('menuborongan', ' ')
@section('content')
<div class="col-12">
<div class="card">
<div class="card-header">
              <h3 class="card-title">Tambahkan Akun Ig Anda</h3>
            </div>
<div class="card-body">
    <div class="row mb-2">
        <div class="col-sm-2 p-2">
        <a href="/admin/akun/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Akun IG </button></a>
        </div>

    </div>
    
</div>
</div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Artikel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <tr>
                        <th>No</th>
                        <th>Nama Akun</th>
                        <th>Insight</th>
                        <th>Action</th>
                    </tr>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($akunig as $akunigdata)

                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $akunigdata->NamaAkun}}</td>
                        <td>Followers : {{ $akunigdata->Followers}}
                            <br>
                            Profile Visitor : {{ $akunigdata->ProfileVisitor}}
                        </td>
                      
                        <td><a href="/admin/akun/edit/{{ $akunigdata->id }}" data-toggle="tooltip" title="Edit Data" > <i class="far fa-edit"></i></a>
                            <a href="/admin/akun/delete/{{ $akunigdata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus"></i></a>
                         </td>
                        
                    </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                        <th> No</th>
                        <th>Nama Akun</th>
                        <th>Insight</th>
                        <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>

<!-- /.col -->

<div class="col-12">
<div class="card">
<div class="card-header">
              <h3 class="card-title">Menu </h3>
            </div>
<div class="card-body">
    <div class="row mb-2">
        <div class="col-sm-2 p-2">
        <a href="/admin/user"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">User</button></a>
        </div>
        
        <div class="col-sm-2 p-2">
        <a href="/admin/pp/satuan"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">PP Satuan</button></a>
        </div>
        <div class="col-sm-2 p-2">
        <a href="/admin/pp/borongan"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">PP Borongan</button></a>
        </div>

    </div>
    
</div>
</div>
</div>
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
