<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class FrontController extends Controller
{
    public function index(){
      $barang = DB::table('barangs')->join('images','images.id_barang','=','barangs.id_barang')->get();
      $cart = Cart::content();
      $cart1 = Cart::content();
      $s = 1;
      return view('home',['barang'=>$barang,'cart'=>$cart,'s'=>$s]);
    }
    public function about(){
      $s = 2;
        return view('about',['s'=>$s]);
    }
    public function kontak(){
      $s = 3;
        return view('kontak',['s'=>$s]);
    }
}
