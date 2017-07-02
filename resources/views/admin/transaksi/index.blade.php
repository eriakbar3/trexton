@extends('admin.layouts.dashboard')
@section('css')
<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
<link href="{{asset('assetmin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
<link href="{{asset('assetmin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css')}}" rel="stylesheet">

@stop
@section('content')
<section id="content">
  <div class="container">

    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Transaksi
        </div>
      </div>
      <div class="t-body tb-padding">
        <a href="{{url('admin/transaksi/tambah')}}" class="btn btn-alt btn-primary"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Transaksi</a>
        {!! Session::get('message')!!}
    <div class="table-responsive m-t-20">
        <table class="table">
            <thead class="bg-blue">
              <tr>
                  <th data-column-id="No" data-type="numeric">No</th>
                  <th data-column-id="ID">ID Transaksi</th>
                  <th data-column-id="Costumer">Costumer</th>
                  <th data-column-id="Grand Total">Grand Total</th>
                  <th data-column-id="Action">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              @foreach($data as $datas)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$datas->id_transaksi}}</td>
                    <td>{{$datas->costumer}}</td>
                    <td>{{$datas->total_bayar}}</td>
                    <td><a href="{{url('admin/transaksi/detail/'.$datas->id_transaksi)}}" alt="Detail" title="Detail"><i class="zmdi zmdi-file-text"></i></a>
                        <a href="#hapus-{{$datas->id_transaksi}}" alt="Hapus" title="Hapus" data-toggle="modal"><i class="zmdi zmdi-delete"></i></a></td>
                </tr>
                <div class="modal fade" id="hapus-{{$datas->id_transaksi}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form class="" action="{{url('admin/transaksi/delete/'.$datas->id_transaksi)}}" method="post">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="id" value="{{$datas->id_transaksi}}">
                              <div class="modal-body">
                                <div class="sweet-alert" tabindex="-1" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-ouside-click="false" data-has-done-function="true" data-timer="null" style="display: block; margin-top: 0px; position:relative">
                                <div class="icon warning pulseWarning" style="display: block;"> <span class="body pulseWarningIns"></span> <span class="dot pulseWarningIns"></span> </div>
                                <h2>Yakin Dihapus?</h2>
                                <p class="lead text-muted" style="display: block;">Data Transaksi yang dihapus tidak dapat dikembalikan!</p>
                              </div>
                              </div>
                              <div class="modal-footer" style="text-align:center">
                                <button type="submit" class="btn btn-sm btn-primary">Ya, Hapus!</button>

                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</section>

@stop
@section('js')
<script src="{{url('assetmin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js')}}"></script>

@stop
