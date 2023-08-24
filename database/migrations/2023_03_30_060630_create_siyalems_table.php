<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiyalemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siyalems', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('datapegawai_id')->references('id')->on('data_pegawais')->cascadeOnDelete();
            $table->string('lembaga');
            $table->string('sikap');
            $table->string('langkah');
            $table->string('bangun_kepala');
            $table->string('rambut');
            $table->string('kening');
            $table->string('dahi');
            $table->string('hidung');
            $table->string('bibir');
            $table->string('telinga');
            $table->string('urusan_polisi_militer');
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
        Schema::dropIfExists('siyalems');
    }
}
