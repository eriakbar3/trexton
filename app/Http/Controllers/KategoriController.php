<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();

        return view('admin.produk.kategori.index',['kategori'=>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kat = new Kategori;
        $kat->nama_kategori = $request->kategori;
        $kat->save();

        return redirect('admin/barang-jasa/kategori')->with('message', '<div class="alert alert-succes">Kategori Berhasil Ditambah</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $kategori = Kategori::find($id);
      $kategori->nama_kategori = $request->kategori;
      $kategori->save();
      return redirect('admin/barang-jasa/kategori')->with('message','<div class="alert alert-succes">Kategori Berhasil di Update</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $kategori = Kategori::find($id);
      $kategori->delete();
      return redirect('admin/barang-jasa/kategori')->with('message','<div class="alert alert-succes">Kategori Berhasil di Hapus</div>');
    }
}
