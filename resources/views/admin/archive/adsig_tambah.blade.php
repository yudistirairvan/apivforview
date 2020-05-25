@extends('themplate.master')

@section('title', 'Pengajuan Jadwal')
@section('logo', '../../../../assets/adminlte/dist/img/AdminLTELogo.png')
@section('profile', '../../../../assets/adminlte/dist/img/user2-160x160.jpg')
@section('menu', 'Pengajuan Jadwal')
@section('js')
<!-- Daterange picker -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/daterangepicker/daterangepicker.css') !!}">




  <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') !!}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') !!}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/select2/css/select2.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{!! asset('assets/adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') !!}">

@endsection

@section('content')

<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="/admin/ads/instagram/store" role="form" >
                {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group">
                    <label for="idpaket">Pilih Paket</label>

                    <select name="idpaket" class="form-control">
                    @foreach($paket as $paketdata)
                      <option value="{{ $paketdata->id }}">{{ $paketdata->nama_paket }}</option>
                    @endforeach
                     <select>
                  </div>


                </div>

                <div class="card-body">
                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                    <label>Tanggal:</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" name="tanggalpengajuan" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
                <div class="card-body">
                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label>Jam:</label>

                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="text" name="jampengajuan" class="form-control datetimepicker-input" data-target="#timepicker"/>
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="picemail">Pic Email</label>
                    <input type="text" class="form-control" id="picemail" name="picemail" placeholder="email@email.com">
                  </div>

                </div>

                <div class="card-body">
                    <div class="form-group">
                    <label for="picphone">PIC Phone</label>
                    <input type="text" class="form-control" id="picphone" name="picphone" placeholder="+62xxx">
                  </div>

                </div>

                <div class="card-body">
                    <div class="form-group">
                    <label for="catatan">Catatan </label>
                    <input type="text" class="form-control" id="catatan" name="catatan" placeholder="xxx">
                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan Paket</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



</div>
@endsection
@section('js2')
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Select2 -->
<script src="{!! asset('assets/adminlte/plugins/select2/js/select2.full.min.js') !!}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{!! asset('assets/adminlte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') !!}"></script>
<!-- InputMask -->

<script src="{!! asset('assets/adminlte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') !!}"></script>

<!-- bootstrap color picker -->
<script src="{!! asset('assets/adminlte/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}"></script>

<!-- Bootstrap Switch -->
<script src="{!! asset('assets/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('assets/adminlte/dist/js/adminlte.min.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('assets/adminlte/dist/js/demo.js') !!}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>


@stop
