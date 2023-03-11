<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenugasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penugasans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('pemberi_tugas_id');
            $table->foreign('pemberi_tugas_id')->references('id')->on('users');
            $table->unsignedBigInteger('penerima_tugas_id');
            $table->foreign('penerima_tugas_id')->references('id')->on('users');
            $table->longText('uraian_tugas');
            $table->longText('uraian_hasil');
            $table->string('lampiran');
            $table->date('tanggal_penugasan');
            $table->date('tanggal_deadline');
            $table->date('tanggal_penyelesaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penugasans');
    }
}
