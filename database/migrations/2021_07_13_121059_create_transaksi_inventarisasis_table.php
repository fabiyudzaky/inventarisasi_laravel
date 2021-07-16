<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiInventarisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_inventarisasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_registrasi');
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->date('tanggal_perolehan');
            $table->longText('keterangan');
            $table->integer('kondisi_id');
            $table->string('kode_unit');
            $table->integer('jenis_inventarisasi_id');
            $table->integer('ruangan_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_inventarisasis');
    }
}
