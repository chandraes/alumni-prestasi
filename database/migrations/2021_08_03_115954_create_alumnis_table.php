<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('jurusan_prodi_id')->constrained('jurusan_prodis');
            $table->integer('angkatan');
            $table->integer('bulan_wisuda');
            $table->integer('tahun_wisuda');
            $table->boolean('sudah_bekerja');
            $table->string('tempat_bekerja_pertama')->nullable();
            $table->bigInteger('gaji_pertama')->nullable();
            $table->string('tempat_bekerja_sekarang')->nullable();
            $table->string('posisi_bagian')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
}
