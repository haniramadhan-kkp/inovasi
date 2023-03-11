<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinkepegawaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izinkepegawaians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenis_cuti');
            $table->integer('lama_cuti');
            $table->date('mulai_cuti');
            $table->date('akhir_cuti');
            $table->integer('sisa_n2');
            $table->integer('sisa_n1');
            $table->integer('sisa_n');
            $table->string('keterangan_n2');
            $table->string('keterangan_n1');
            $table->string('keterangan_n');
            $table->text('alamat_cuti');
            $table->string('no_telp');
            $table->text('cat_atasan');
            $table->text('cat_pejabat');
            $table->unsignedBigInteger('statusizinkepegawaian_id');
            $table->foreign('statusizinkepegawaian_id')->references('id')->on('statusizinkepegawaians');
            $table->string('keperluan_cuti');
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('users');
            $table->string('formulir_cuti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izinkepegawaians');
    }
}
