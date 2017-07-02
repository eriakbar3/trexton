@extends('admin.layouts.dashboard')
@section('content')
<section id="content">
  <div class="container">

    <div class="tile">
      <div class="t-header">
        <div class="th-title">
          Kategori
        </div>
      </div>
      <div class="t-body tb-padding">
        <a href="{{url('admin/produk/tambah-produk')}}" class="btn btn-alt btn-primary"><i class="zmdi zmdi-plus zmdi-hc-fw"></i> Tambah Kategori</a>
    <div class="table-responsive m-t-20">
        <table class="table">
            <thead class="bg-blue">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tanggal Order</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jhon </td>
                    <td>{{date('d-m-Y')}} </td>
                    <td>Belum Lunas</td>
                    <td><a href="#">Detail</a>/<a href="#">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
</div>
</section>

@stop
