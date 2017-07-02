<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('transaksis',function(Blueprint $table){
        $table->increments('id_transaksi');
        $table->integer('id_barang');
        $table->string('costumer');
        $table->integer('qty');
        $table->double('total');
        $table->string('bulan');
        $table->date('tgl_transaksi');
        $table->string('merk',15);
        $table->string('tipe',15);
        $table->string('no_polisi',20);
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
