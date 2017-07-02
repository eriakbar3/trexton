@extends('admin.layouts.dashboard')
@section('css')
<link href="{{asset('assetmin/vendors/chosen_v1.4.2/chosen.min.css')}}" rel="stylesheet">
@stop
@section('content')
<section id="content">
  <div class="container">
    <header class="page-header">
        <h3>Tambah Transaksi</h3>
    </header>
    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Barang
        </div>
      </div>
      <div class="t-body tb-padding">
          <div class="form-group" style="width:30%">
            <label>Nama Barang / Jasa</label>
                <select id="barangid" name="barang" class="tag-select" data-placeholder="Pilih Barang...">
                  <option>Barang /  Jasa</option>
                    @foreach($barang as $barangs)
                    <option value="{{$barangs->id_barang}}">{{$barangs->nama_barang}}</option>
                    @endforeach
                </select>
          </div>
          <div class="form-group" style="width:30%" id="harga" >
            <label>Harga</label>
            <input type="text" name="harga" value="" class="form-control" disabled>
          </div>
          <div class="form-group" style="width:10%">
            <label>Quantity</label>
            <input id="jml" type="text" name="qty" value="" class="form-control">
          </div>
          <button id="submit" type="submit" class="btn btn-primary btn-sm m-t-10">Submit</button>

      </div>
    </div>
    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Data Transaksi
        </div>
      </div>


        <div class="table-responsive m-t-20">
          <form class="" action="{{url('admin/transaksi/post')}}" method="post">
            {{csrf_field()}}
            <div class="tb-padding">
              <div class="form-group" style="width:30%;">
                <label>Costumer</label>
                <input type="text" name="costumer" value="" class="form-control">
              </div>
            </div>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang / Jasa</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Harga Total</th>
              </tr>
            </thead>
            <tbody id="transaksi">

            </tbody>
          </table>
          <div class="tb-padding">
            <button type="submit" class="btn btn-primary btn-sm m-t-10">Simpan</button>
          </div>
        </form>

        </div>

    </div>
  </div>
</section>

@stop
@section('js')
<script src="{{asset('assetmin/vendors/chosen_v1.4.2/chosen.jquery.min.js')}}"></script>
<script type="text/javascript">
  $('#barangid').change(function(e){
    var b = document.getElementById('barangid');
    var ba= b.options[b.selectedIndex].value;
    $.get('{{url("admin/getharga?barang=")}}'+ba,function(data){
      console.log(data);
      $.each(data, function(ba, menuObj){
        $('#harga').empty();
              $('#harga').append('<label>Harga</label><input id="hrg" type="text" name="harga" value="'+data.harga+'" class="form-control" disabled>');
      });
    });
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
  var scntDiv = $('#transaksi');
    var o = $('#transaksi input').size()+1 ;
  $('#submit').click(function(){
    var qty = document.getElementById('jml').value;
    var em = document.getElementById('barangid');
    var id_barang = em.options[em.selectedIndex].value;
    var barang = em.options[em.selectedIndex].text;
    var harga = document.getElementById('hrg').value;
    var total = harga*qty;
      $('<tr><td>'+o+'</td><td>'+barang+'</td><td>'+harga+'</td><td>'+qty+'</td><td>'+total+'</td></tr> <input type="hidden" name="barang[]" value="'+id_barang+'"><input type="hidden" name="qty[]" value="'+qty+'"><input type="hidden" name="total[]" value="'+total+'"> ').appendTo(transaksi);
      o++;
  });
});

</script>
@stop
