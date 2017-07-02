<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produk;
use App\Kategori;
use App\Image;
class ProdukController extends Controller
{
  public function index(){
    $produk = DB::table('barangs')
              ->join('kategoris','kategoris.id_kategori','=','barangs.id_kategori')->get();

    return view ('admin.produk.index',['barang'=>$produk]);
  }
  public function create(){
    $kategori = Kategori::all();

    return view('admin.produk.create',['kategori'=>$kategori]);
  }
  public function post(Request $request){
    $file = $request->file('image');
    $produk = DB::table('barangs')->insertGetID([
      'nama_barang'=>$request->nama_barang,
      'id_kategori'=>$request->kategori,
      'harga'=>$request->harga,
      'stok'=>$request->stok,
      'deskripsi'=>$request->deskripsi,
      'created_at'=>date('Y-m-d H:i:s'),
      'updated_at'=>date('Y-m-d H:i:s'),
    ]);
    foreach ($file as $file){
    $destinationPath = public_path().'/img-produk/';
    $filename = rand(11111,99999).'-'. md5(time()) . '.' . $file->getClientOriginalExtension();
    $file->move($destinationPath, $filename);
    $files =$filename;
    $image = new Image;
    $image->image = $files;
    $image->id_barang = $produk;
    $image->save();
    }
    return redirect('admin/barang-jasa')->with('message','<div class="alert alert-succes">Barang & Jasa Telah Ditambahkan</div>');
  }
}
