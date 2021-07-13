<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPindahRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pindah_ruangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('master_aset_id');
            $table->integer('ruangan_asal_id');
            $table->integer('ruangan_tujuan_id');
            $table->integer('dokumen_id');
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
        Schema::dropIfExists('transaksi_pindah_ruangans');
    }
}
