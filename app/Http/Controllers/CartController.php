<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Cart;
use Response;
class CartController extends Controller
{
  public function cart(Request $request) {
    if ($request->isMethod('post')) {
        $product_id = $request->input('barang_id');
        $product = Barang::find($product_id);
        Cart::add(['id' => $product_id, 'name' => $product->nama_barang, 'qty' => 1, 'price' => $product->harga, 'options' => ['gambar'=>$product->image]]);
    }
    return redirect('/');
  }
  public function hitung(Request $request){
    for ($i=0; $i <count($request->id_barang) ; $i++) {
      $id = $request->id_barang[$i];
      $qty = $request->qty[$i];
      $rowId = Cart::search(function($key,$rowId) use($id){
        return $key->id == $id;
      });
      $idrow = $rowId->first();
      $idr = $idrow->rowId;
      Cart::update($idr,['qty'=>$qty]);
    }
    return redirect('/');;

  }
  public function tocart(Request $request){
    if ($request->input('cart_id') && $request->input('increment') == 1) {
      $id = $request->input('cart_id');
        $rowId = Cart::search(function($key,$rowId) use($id){
          return $key->id == $id;
        });
        $idrow = $rowId->first();
        $qty = $idrow->qty+1;
        $idr = $idrow->rowId;
        Cart::update($idr,['qty'=>$qty]);
        echo $qty;
    }
    if ($request->input('cart_id') && $request->input('decrease') == 1) {
      $id = $request->input('cart_id');
        $rowId = Cart::search(function($key,$rowId) use($id){
          return $key->id == $id;
        });
        $idrow = $rowId->first();
        $qty = $idrow->qty-1;
        $idr = $idrow->rowId;
        Cart::update($idr,['qty'=>$qty]);
        return $idrow->subtotal;
    }

  }
  public function viewcart(){
    $cart = Cart::content();

    //print_r($cart);

    return view('produk.cart',['cart'=>$cart,'cart2'=>$cart]);
  }
  public function printrcart(Request $request){
    //$cart = Cart::content();
    if (count($request->input('cart_id'))!=0) {
      # code...
      $id = $request->input('cart_id');

      $rowId = Cart::search(function($key,$rowId) use($id){
        return $key->id == $id;
      });
      $idrow = $rowId->first();
      //print_r($idrow);
      $subtot = $idrow->subtotal;
      echo "Rp".number_format($subtot,0,'.','.');
    }
    $cart = Cart::content();
    foreach($cart as $cart){
      $arraysum[] = $cart->subtotal;
    }
    //print_r($arraysum);
    if($request->input('subtotal') !=0){
      echo "Rp".number_format(array_sum($arraysum),0,'.','.');
    }
    //return view('produk.cart',['cart'=>$cart,'cart2'=>$cart]);
  }
}
