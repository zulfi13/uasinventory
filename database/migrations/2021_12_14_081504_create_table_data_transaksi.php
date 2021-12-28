<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDataTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_data_transaksi', function (Blueprint $table) {
            $table->id();
            $table->date ('tanggal_transaksi');
            $table->integer ('jumlah_barang_masuk');
            $table->integer ('jumlah_barang_keluar');
            $table->integer ('total_pendapatan');
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
        Schema::dropIfExists('table_data_transaksi');
    }
}
