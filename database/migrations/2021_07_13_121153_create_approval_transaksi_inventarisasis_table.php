<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalTransaksiInventarisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_transaksi_inventarisasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transaksi_inventarisasi_id');
            $table->longText('alasan');
            $table->string('status');
            $table->integer('pembuat_id');
            $table->integer('verifikator_id');
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
        Schema::dropIfExists('approval_transaksi_inventarisasis');
    }
}
