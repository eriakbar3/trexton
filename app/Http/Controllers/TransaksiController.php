<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('data_transaksi')->join('transaksis','transaksis.id_transaksi','=','data_transaksi.id_transaksi')->get();

        return view('admin.transaksi.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = DB::table('barangs')->get();
        return view('admin.transaksi.create',['barang'=>$barang]);
    }

    public function getharga(Request $request){
      $barang = $request->input('barang');
      $barangs = DB::table('barangs')->where('id_barang',$barang)->first();
      //print_r($barangs);
      return Response::json($barangs);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qty = $request->qty;
        $barang = $request->barang;
        $costumer = $request->costumer;
        $total = $request->total;
        $arr  = array('c' => $costumer,'t'=>$total );
        $sum = array_sum($total);
        print_r($sum);
        $transaksi = DB::table('transaksis')->insertGetID([
          'costumer'=>$request->costumer,
          'total_bayar'=>$sum,
          'tgl_transaksi'=>date('Y-m-d'),
        ]);
        for ($i=0; $i <count($qty) ; $i++) {
          DB::table('data_transaksi')->insert([
            'id_barang'=>$barang[$i],
            'id_transaksi'=>$transaksi,
            'qty'=>$qty[$i],
            'total'=>$total[$i],
          ]);
        }
        return redirect('admin/transaksi')->with('message', '<div class="alert alert-success">Transaksi Berhasil Ditambahkan</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $transaksi = DB::table('transaksis')->where('id_transaksi',$id)->first();
      $data = DB::table('data_transaksi')->where('data_transaksi.id_transaksi',$id)->join('barangs','barangs.id_barang','=','data_transaksi.id_barang')->get();

      return view('admin.transaksi.detail',['transaksi'=>$transaksi,'data'=>$data]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_transaksi')->where('id_transaksi',$id)->delete();
        DB::table('transaksis')->where('id_transaksi',$id)->delete();
        $cek = DB::table('data_transaksi')->where('id_transaksi',$id)->get();
        $cek2 = DB::table('transaksis')->where('id_transaksi',$id)->first();
        if (count($cek) == 0 && count($cek2) == 0) {
          # code...
          return redirect('admin/transaksi')->with('message', '<div class="alert alert-success">Data Transaksi Berhasil di Hapus</div>');
        }
    }

    public function prints($id){
      $transaksi = DB::table('transaksis')->where('id_transaksi',$id)->first();
      $data = DB::table('data_transaksi')->where('data_transaksi.id_transaksi',$id)->join('barangs','barangs.id_barang','=','data_transaksi.id_barang')->get();

      return view('admin.transaksi.print',['transaksi'=>$transaksi,'data'=>$data]);
    }
}
