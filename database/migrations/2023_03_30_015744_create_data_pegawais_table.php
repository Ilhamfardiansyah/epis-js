<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pangkat');
            $table->string('NRP');
            $table->string('jabatan');
            $table->string('kesatuan');
            $table->string('nopassring');
            $table->string('tandajasa');
            $table->string('tgl');
            $table->string('suku');
            $table->string('agama');
            $table->string('tinggi');
            $table->string('warnakulit');
            $table->string('mata');
            $table->string('rambut');
            $table->string('goldarah');
            $table->string('alamatsekarang');
            $table->string('ayahalamat');
            $table->string('ibualamat');
            $table->string('istrialamat');
            $table->string('tempatnikah');
            $table->string('namaanak');
            $table->string('ortuistrialamat');
            $table->string('jenis');
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
        Schema::dropIfExists('data_pegawais');
    }
}
