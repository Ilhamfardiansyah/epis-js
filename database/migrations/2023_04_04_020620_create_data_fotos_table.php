<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_fotos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siyalem_id')->references('id')->on('siyalems')->cascadeOnDelete();
            $table->string('ket_pic');
            $table->string('depan_pic');
            $table->string('kanan_pic');
            $table->string('kiri_pic');
            $table->string('sidik_pic');
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
        Schema::dropIfExists('data_fotos');
    }
}
