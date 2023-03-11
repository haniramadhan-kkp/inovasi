<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotulensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulensis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('kegiatan');
            $table->date('tanggal');
            $table->unsignedBigInteger('notulen_id');
            $table->foreign('notulen_id')->references('id')->on('users');
            $table->string('tempat');
            $table->string('pimpinan_rapat');
            $table->longText('isi');
            $table->mediumText('kesimpulan');
            $table->string('undangan');
            $table->string('dokumentasi');
            $table->string('daftar_hadir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notulensis');
    }
}
