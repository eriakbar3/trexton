@extends('admin.layouts.dashboard')
@section('content')
<section id="content">
  <div class="container">

    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Detail Transaksi
        </div>
      </div>
      <div class="t-body tb-padding">
        <a href="{{url('admin/transaksi/print/'.$transaksi->id_transaksi)}}" class="btn btn-alt btn-primary"><i class="zmdi zmdi-print"></i> Print</a>
    <div class="table-responsive m-t-20">
      <table class="table" style="width:30%">
        <tr>
          <td>Nama Costumer</td>
          <td>{{$transaksi->costumer}}</td>
        </tr>
        <tr>
          <td>Total Bayar</td>
          <td>{{$transaksi->total_bayar}}</td>
        </tr>
        <tr>
          <td>Tanggal Transaksi</td>
          <td>{{date_format(date_create($transaksi->tgl_transaksi),'d M Y')}}</td>
        </tr>
      </table>

        <table class="table">

            <thead class="bg-blue">
              <tr>
                  <th data-column-id="No" data-type="numeric">No</th>
                  <th data-column-id="ID">Nama Barang / Jasa</th>
                  <th data-column-id="Costumer">Harga</th>
                  <th data-column-id="Grand Total">QTY</th>
                  <th data-column-id="Action">Total</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              @foreach($data as $datas)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$datas->nama_barang}}</td>
                    <td>{{$datas->harga}}</td>
                    <td>{{$datas->qty}}</td>
                    <td>{{$datas->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</section>

@stop
