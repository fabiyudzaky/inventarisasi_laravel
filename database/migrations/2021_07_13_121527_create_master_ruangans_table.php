<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_ruangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_ruangan');
            $table->string('nama_ruangan');
            $table->integer('master_lantai_id');
            $table->integer('penanggung_jawab_ruangan_id');
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
        Schema::dropIfExists('master_ruangans');
    }
}
