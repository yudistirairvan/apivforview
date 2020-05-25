@extends('themplate.master')

@section('title', 'Intagram ADS')
@section('logo', '../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Intagram ADS')

@section('content')
<div class="col-12">
    <div class="row mb-2">
        <div class="col-sm-2">
        <a href="/admin/ads/instagram/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Ajukan Jadwal</button></a>
        </div>
    </div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Intagram ADS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Transaction</th>
                    <th>jenis Paket</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jam Pengajuan</th>
                    <th>Tanggal Disetujui</th>
                    <th>Jam Disetujui</th>
                    <th>PIC Email</th>
                    <th>PIC Phone</th>
                    <th>Catatan</th>
                    <th>status</th>
                    <th>OPSI</th>
                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($adsig as $adsigdata)

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $adsigdata->transaction}}</td>
                    <td>{{ $adsigdata->id_paket}}</td>
                    <td>{{ $adsigdata->tanggal_pengajuan}}</td>
                    <td>{{ $adsigdata->jam_pengajuan}}</td>
                    <td>{{ $adsigdata->tanggal_disetujui}}</td>
                    <td>{{ $adsigdata->jam_disetujui}}</td>
                    <td>{{ $adsigdata->pic_email}}</td>
                    <td>{{ $adsigdata->pic_phone}}</td>
                    <td>{{ $adsigdata->catatan}}</td>
                    <td>{{ $adsigdata->status_adsig}}</td>
                    <td>
                        <a href="/admin/ads/instagram/edit/{{ $adsigdata->id }}" data-toggle="tooltip" title="Edit Ads IG" > <i class="far fa-edit"></i></a>
                        <a href="/admin/ads/instagram/delete/{{ $adsigdata->id }}"> <i class="far fa-trash-alt" data-toggle="tooltip" title="Hapus"></i></a>

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>Transaction</th>
                    <th>jenis Paket</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jam Pengajuan</th>
                    <th>Tanggal Disetujui</th>
                    <th>Jam Disetujui</th>
                    <th>PIC Email</th>
                    <th>PIC Phone</th>
                    <th>Catatan</th>
                    <th>status</th>
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
