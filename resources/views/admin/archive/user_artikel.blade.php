@extends('themplate.master')

@section('title', 'Artikel')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Artikel')

@section('content')
<div class="col-12">
    <div class="row mb-2">
        <div class="col-sm-2">
        <a href="/user/artikel/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Artikel</button></a>
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
                        <th>id user</th>
                        <th>id kategori</th>
                        <th>judul</th>
                        <th>Date</th>
                        <th>gambar</th>
                        <th>file</th>
                        <th>edited</th>
                        <th>publish</th>
                        <th>OPSI</th>
                    </tr>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($artikel as $artikeldata)
           
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $artikeldata->id_user}}</td>
                        <td>{{ $artikeldata->id_kategori}}</td>
                        <td><a href="/user/artikel/edit/{{ $artikeldata->id }}">{{ $artikeldata->judul}}</a></td>
                        <td>{{ $artikeldata->day}} / {{ $artikeldata->month}} / {{ $artikeldata->year}}</td>
                        <td><img src="/data_gambar/{{ $artikeldata->gambar }}" width="100px" ></td>
                        <td><a href="/data_file/{{ $artikeldata->file }}"> {{ $artikeldata->file }} </td>
                        <td>
                          
                          <?php $edit=$artikeldata->edited;
                          if ($edit==0)
                          { echo"Belum Pernah Disunting"; }
                          else{
                            echo"$edit";;
                          }
                          ?>
                          
                        </td>
                        <td>
                          
                          <?php $status=$artikeldata->publish;
                          if ($status==1)
                          { echo"<font color='green'>Telah Disetujui</font>"; }
                          else{
                            echo"<font color='red'>Belum Disetuji</font>";;
                          }
                          ?>


                        </td>
                        <td>
                            <a href="/user/artikel/edit/{{ $artikeldata->id }}" data-toggle="tooltip" title="Edit Artikel" > <i class="far fa-edit"></i></a>
                            <a href="/user/artikel/delete/{{ $artikeldata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus Artikel"></i></a>
   
                        </td>
                    </tr>
                <?php $no++; ?> 
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                        <th>No</th>
                        <th>id user</th>
                        <th>id kategori</th>
                        <th>judul</th>
                        <th>Date</th>
                        
                        <th>gambar</th>
                        <th>file</th>
                        <th>edited</th>
                        <th>publish</th>
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