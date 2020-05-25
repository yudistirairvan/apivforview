@extends('themplate.master')

@section('title', 'Message')
@section('logo', '../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Message')

@section('content')
<div class="col-12">
    <div class="row mb-2">
        <div class="col-sm-2">
        <!-- <a href="/admin/kategori/tambah"><button type="button" class="btn btn-block bg-gradient-primary btn-lg">Tambah Kategori</button></a> -->
        </div>
    </div>
</div>
<div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Message</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="data" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>

                </tr>
                </thead>
                <tbody>

                <?php $no = 1; ?>
                @foreach($message as $messagedata)

                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $messagedata->firstname}}</td>
                    <td>{{ $messagedata->lastname}}</td>
                    <td>{{ $messagedata->email}}</td>
                    <td>{{ $messagedata->subject}}</td>
                    <td>{{ $messagedata->message}}</td>

                    <?php $status=$messagedata->status;?>

                    <td>
                    @if ($status==1)
                            <a href="/admin/message/read/{{ $messagedata->id }}" ><i class="fas fa-envelope" data-toggle="tooltip" title="mark as read"></i></a>

                    @elseif ($status==3)
                            <a href="/admin/message/unarcive/{{ $messagedata->id }}" ><i class="fas fa-archive" data-toggle="tooltip" title="Un Arcive"></i></a>

                            @else
                            <a href="/admin/message/arcive/{{ $messagedata->id }}" ><i class="fas fa-envelope-open" data-toggle="tooltip" title="Arcive"></i></a>
                            @endif

                    </td>
                </tr>
                <?php $no++; ?>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>

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
