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
            $table->text('alamat');
            $table->string('no_hp');
            $table->foreignId('jurusan_prodi_id')->constrained('jurusan_prodis');
            $table->integer('angkatan');
            $table->integer('bulan_wisuda');
            $table->integer('tahun_wisuda');
            $table->string('no_ijazah');
            $table->decimal('ipk', 3, 2);
            $table->tinyInteger('status');
            $table->string('tempat_bekerja_pertama')->nullable();
            $table->foreignId('penghasilan_pertama_id')->nullable()->constrained('penghasilan');
            $table->string('tempat_bekerja_sekarang')->nullable();
            $table->string('posisi_bagian')->nullable();
            $table->text('alamat_kantor')->nullable();
            $table->text('website_kantor')->nullable();
            $table->date('tanggal_masuk_kerja')->nullable();
            $table->tinyInteger('kesesuaian_bidang')->nullable();
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
