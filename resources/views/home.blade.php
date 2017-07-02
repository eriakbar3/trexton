@extends('layouts.dashboard')
@section('content')
<section class="col-md-4">
  <div class="section-title mb-30">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="mt-0 mb-5">Hitung Barang</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Harga</th>
              <th>Qty</th>
              <th>Sub Total</th>
            </tr>
          </thead>
          <tbody>
            <form class="" action="{{url('hitung-ulang')}}" method="post">
              {{csrf_field()}}
              @if(count($cart)!=0)
              @foreach($cart as $carts)
              <input type="hidden" name="id_barang[]" value="{{$carts->id}}">
              <tr>
                <td>{{$carts->name}}</td>
                <td>{{$carts->price}}</td>
                <td><input id="qty" type="text" name="qty[]" value="{{$carts->qty}}" class="form-control" style="width:50px;"></td>
                <td>{{$carts->subtotal}}</td>
              </tr>
                <?php $arraysum[] = $carts->subtotal; ?>
              @endforeach
              <?php $sum = array_sum($arraysum); ?>
              <tr>
                <td colspan="3">Total</td>
                <td>{{$sum}}</td>
              </tr>
              @else
              <div class="alert alert-warning">
                Barang Atau Jasa kosong
              </div>
              @endif
        </tbody>

        </table>
        <button type="submit" name="button" class="btn btn-theme-colored btn-sm">Hitung Ulang</button>
      </form>
      </div>
    </div>
  </div>
</section>
    <section class="col-md-8">

      <div class=" pb-0">
        <div class="section-title text-center mb-30">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="mt-0 mb-5">New Collection</h2>
              <p class="font-16 mt-0">See what new products are available in online shop</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="products">
              @foreach ($barang as $barangs)
              <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                <div class="product">
                  <div class="product-thumb">
                    <img alt="" src="{{asset('img-produk/'.$barangs->image)}}" class="img-responsive img-fullwidth">
                    <form class="" action="{{'to-cart'}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="barang_id" value="{{$barangs->id_barang}}">
                      <div class="overlay">
                        <div class="btn-add-to-cart-wrapper">
                          <button type="submit" name="button" class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700">Add To Cart</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="product-details text-center">
                    <a href="#"><h5 class="product-title">{{$barangs->nama_barang}}</h5></a>
                    <div class="price">Rp {{$barangs->harga}}</div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  @stop
