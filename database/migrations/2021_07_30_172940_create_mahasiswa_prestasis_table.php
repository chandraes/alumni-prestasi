<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaPrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->foreignId('jurusan_prodi_id')->constrained('jurusan_prodis');
            $table->foreignId('kegiatan_id')->constrained('kegiatan_prestasis');
            $table->foreignId('tingkat_prestasi_id')->constrained('tingkat_prestasi');
            $table->foreignId('jenis_prestasi_id')->constrained('jenis_prestasi');
            $table->date('waktu');
            $table->string('tempat');
            $table->string('nama_prestasi');
            $table->string('penyelenggara');
            $table->text('bukti_path');
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
        Schema::dropIfExists('mahasiswa_prestasis');
    }
}
