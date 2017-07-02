<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('barangs', function (Blueprint $table) {
          $table->increments('id_barang');
          $table->string('nama_barang');
          $table->double('harga');
          $table->integer('berat');
          $table->integer('stok');
          $table->integer('id_kategori');
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
