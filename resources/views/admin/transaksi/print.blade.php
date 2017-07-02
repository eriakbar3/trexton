<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Detail Transaksi</title>

            <link href="{{asset('assetmin/vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
            <link href="{{asset('assetmin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
            <link href="{{asset('assetmin/css/app.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <div class="col-sm-12 text-center" style="border:1px dotted #333">
      <img src="{{asset('img/logo.jpg')}}" alt="" style="width:30%;height:30%">
      <p>Geger Kalong</p>
      <p>Telp (022) 912 209 28 - 916 006 68 - FAX. (022) 2006628 0813 2288 8000 - 0813 2070 1265</p>
    </div>
    <div class="table-responsive m-t-20">
      <table class="table" style="width:50%">
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
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>
