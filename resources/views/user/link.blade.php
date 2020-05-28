@extends('user.themplate.master')

@section('title', 'Add Link')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Add Link')
@section('menudashboard', ' ')
@section('menulink', 'menu active')
@section('menulog', ' ')

@section('content')
<div class="col-12">
<div class="card">
<div class="card-header">
              <h3 class="card-title">Tambahkan Link Video Anda</h3>
            </div>
<div class="card-body">
    <div class="row mb-2">
        <div class="col-sm-2 p-2">
        <a href="/user/link/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Link </button></a>
        </div>

    </div>
    
</div>
</div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Link</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Video</th>
                        <th>Action</th>
                    </tr>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($link as $linkdata)

                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $linkdata->Status }}</td>
                        <td>{{ $linkdata->Judul}}
                            <br>
                            Id Video : {{ $linkdata->Link}}
                            <br>
                            Durasi Video : {{ $linkdata->Waktu}}
                        </td>
                      
                        <td><a href="/user/link/edit/{{ $linkdata->id }}" data-toggle="tooltip" title="Edit Data" > <i class="far fa-edit"></i></a>
                            <a href="/user/link/delete/{{ $linkdata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus"></i></a>
                         </td>
                        
                    </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                        <th>Status</th>
                        <th>Video</th>
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
        <!-- <div class="col-sm-2 p-2">
        <a href="/admin/user"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">User</button></a>
        </div>
        
        <div class="col-sm-2 p-2">
        <a href="/admin/pp/satuan"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">PP Satuan</button></a>
        </div>
        <div class="col-sm-2 p-2">
        <a href="/admin/pp/borongan"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">PP Borongan</button></a>
        </div> -->

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
