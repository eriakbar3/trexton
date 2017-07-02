@extends('admin.layouts.dashboard')
@section('css')
<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
@stop
@section('content')
<section id="content">
  <div class="container">

    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Kategori  {{ucfirst($katasli->nama_kategori)}}
        </div>
      </div>
      <div class="t-body tb-padding">
        <a data-toggle="modal" href="#modalDefault2" class="btn btn-sm btn-default"><i class="zmdi zmdi-plus zmdi-hc-fw"></i>Tambah Sub Kategori</a>
    <div class="table-responsive m-t-20">
        <table class="table">
            <thead class="bg-blue">
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              @if(count($kat)!=null)
              @foreach($kat as $kat)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$kat->nama_subkategori}} </td>
                    <td><a href="#edit-{{$kat->id_subkategori}}" data-toggle="modal" title="edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>/ <a href="#hapus-{{$kat->id_subkategori}}" title="hapus" data-toggle="modal"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                </tr>
                @endforeach
                @else
                <div class="alert alert-warning">
                  <p>Tidak Ada Sub Kategori</p>
                </div>
                @endif
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</section>
@foreach($kats as $kat)
<!-- Modal Default -->
<div class="modal fade" id="edit-{{$kat->id_subkategori}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Kategori</h4>
            </div>
            <form class="" action="{{url('admin/produk/sub-kategori/edit/'.$katasli->id_kategori.'/'.$kat->id_subkategori)}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="_method" value="PUT">
              <div class="modal-body">
                <div class="form-group">
                  <label>Nama Sub Kategori</label>
                  <input type="text" name="kategori" value="{{$kat->nama_subkategori}}" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>

                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@foreach($kat2 as $kat)
<!-- Modal Default -->
<div class="modal fade" id="hapus-{{$kat->id_subkategori}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="" action="{{url('admin/produk/sub-kategori/delete/'.$katasli->id_kategori.'/'.$kat->id_subkategori)}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="id" value="{{$kat->id_subkategori}}">
              <div class="modal-body">
                <div class="sweet-alert" tabindex="-1" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-ouside-click="false" data-has-done-function="true" data-timer="null" style="display: block; margin-top: 0px; position:relative">
                <div class="icon warning pulseWarning" style="display: block;"> <span class="body pulseWarningIns"></span> <span class="dot pulseWarningIns"></span> </div>
                <h2>Yakin Dihapus?</h2>
                <p class="lead text-muted" style="display: block;">Kategori yang dihapus tidak dapat dikembalikan!</p>
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

<div class="modal fade" id="modalDefault2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Sub Kategori</h4>
            </div>
            <form class="" action="{{url('admin/produk/sub-kategori')}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="kategori" value="{{$katasli->id_kategori}}">
              <div class="modal-body">
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" name="kat" value="{{$katasli->nama_kategori}}" class="form-control" disabled="">
                </div>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Sub Kategori</label>
                  <input type="text" name="subkat" value="" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-sm btn-primary">Save</button>

                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
@section('js')
<script src="{{url('assetmin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js')}}"></script>

@stop
