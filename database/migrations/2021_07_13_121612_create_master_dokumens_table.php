<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_dokumens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_dokumen');
            $table->string('nama_kegiatan');
            $table->string('berkas');
            $table->date('tanggal_dokumen');
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
        Schema::dropIfExists('master_dokumens');
    }
}
