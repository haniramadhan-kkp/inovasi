<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjambmnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjambmns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('peminjam_id');
            $table->foreign('peminjam_id')->references('id')->on('users');
            $table->string('atas_nama');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->longText('bmn_dipinjam');
            $table->mediumText('keperluan');
            $table->longText('kelengkapan');
            $table->longText('catatan');
            $table->date('tanggal_pengembalian');
            $table->string('surat_peminjaman');
            $table->string('foto_pengambilan');
            $table->string('foto_pengembalian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjambmns');
    }
}
