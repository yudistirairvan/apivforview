@extends('admin.themplate.master')

@section('title', 'User')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'User')
@section('menudashboard', ' ')
@section('menuakun', ' ')
@section('menuuser', 'menu active')
@section('menupembukuan', ' ')
@section('menusatuan', ' ')
@section('menuborongan', ' ')
@section('content')
<div class="col-12">
<div class="card">
<div class="card-header">
              <h3 class="card-title">Tambahkan User</h3>
            </div>
<div class="card-body">
    <div class="row mb-2">
        <div class="col-sm-2 p-2">
        <a href="/admin/user/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah User</button></a>
        </div>

    </div>
    
</div>
</div>
</div>

<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped ">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Person</th>

                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($user as $userdata)
           
                <tr>
                    <td>{{ $no }}</td>
                    <td>Nama :{{ $userdata->name}} 
                      <br>  
                    Email : {{ $userdata->email}} <br>  
                    Ig :  @foreach($akunig as $akunigdata)
                        @if($akunigdata->id == $userdata->id_ig )
                         
                        
                        {{  $akunigdata->NamaAkun }}
                          @break
                        @endif

                      @endforeach
                    </td>

                    <td>
                        
                        <a href="/admin/user/edit/{{ $userdata->id }}" data-toggle="tooltip" title="Edit Userdata" > <i class="far fa-edit"></i></a>
                        <a href="/admin/user/delete/{{ $userdata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus Userdata"></i></a>
                    </td>
                </tr>
                <?php $no++; ?> 
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Person</th>

                    <th>OPSI</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
<div class="col-12">
<div class="card">
<div class="card-header">
              <h3 class="card-title">Menu </h3>
            </div>
<div class="card-body">
    <div class="row mb-2">
        
        <div class="col-sm-2 p-2">
        <a href="/admin/akun"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Akun IG</button></a>
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