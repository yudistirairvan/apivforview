@extends('admin.themplate.master')

@section('title', 'Paid Promote Satuan')
@section('logo', '../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'PP Satuan')
@section('menudashboard', ' ')
@section('menuakun', ' ')
@section('menuuser', ' ')
@section('menupembukuan', 'menu-open')
@section('menusatuan', 'menu active')
@section('menuborongan', ' ')
@section('content')
<div class="col-12">
<div class="card">
<div class="card-header">
              <h3 class="card-title">Input Data</h3>
            </div>
<div class="card-body">
    <div class="row mb-2">
        <div class="col-sm-2 p-2">
        <a href="/admin/pp/satuan/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Data </button></a>
        </div>

    </div>
    
</div>
</div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Bulan Ini </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <tr>
                        <th>No</th>
                        <th>Transfer</th>
                        <th>Pulsa</th>
                        <th>Action</th>
                    </tr>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; 
                $pendapatan=0;
                $pulsa=0;
                ?>
                @foreach($satuan as $satuandata)

                    <tr>
                        <td>{{ $no }}</td>
                        <?php 
                        
                        if  ($satuandata->Via == "Pulsa")
                        { $hasil_pulsa = number_format($satuandata->Jumlah,2,',','.');
                          echo"
                          <td>   </td>
                          <td>Rp. $hasil_pulsa  </td>";
                          
                        
                        }else{
                          $hasil_tf = number_format($satuandata->Jumlah,2,',','.');
                          echo"
                          <td>Rp. $hasil_tf </td> 
                          <td>   </td>";
                        }
                        ?>
        

                        
                        
                      
                        <td><a href="/admin/pp/satuan/edit/{{ $satuandata->id }}" data-toggle="tooltip" title="Edit Data" > <i class="far fa-edit"></i></a>
                            <a href="/admin/pp/satuan/delete/{{ $satuandata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus"></i></a>
                         </td>
                        
                    </tr>
                <?php $no++; 
                if  ($satuandata->Via == "Pulsa")
                {
                  $pulsa=$pulsa+$satuandata->Jumlah;
                  
                }else{
                  $pendapatan=$pendapatan+$satuandata->Jumlah;
                }


                ?>
                @endforeach
                <tr>
                <th>Sum</th>
                <?php 
                $bersih=($pendapatan*0.6)-$pulsa; 
                $bersih=number_format($bersih,2,',','.');
                $pendapatan=number_format($pendapatan,2,',','.');
                $pulsa=number_format($pulsa,2,',','.'); 
                ?>
                        <th>Rp. {{ $pendapatan }}</th>
                        <th colspan="2">Rp. {{ $pulsa }}</th>
                        
                </tr>
                <tr>
                <th>Total </th>
                <?php 
                
                ?>
                        <th colspan="3" > Rp. {{ $bersih }} (60% - pulsa )</th>
                        
                </tr>
                </tbody>
                <!-- <tfoot>

                <tr>
                        <th>No</th>
                        <th>Transfer</th>
                        <th>Pulsa</th>
                        <th>Action</th>
                    </tr>
                </tfoot> -->
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
        <a href="/admin/akun"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Akun IG</button></a>
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
