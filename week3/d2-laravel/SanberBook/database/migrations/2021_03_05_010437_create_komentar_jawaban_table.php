<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi', 250);
            $table->unsignedBigInteger('pemberi_komentar_id');
            $table->foreign('pemberi_komentar_id')->references('id')->on('user');
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
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
        Schema::dropIfExists('komentar_jawaban');
    }
}
