<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUndanganPathToMahasiswaPrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa_prestasis', function (Blueprint $table) {
            $table->renameColumn('bukti_path', 'sertifikat_path');
            $table->text('undangan_path')->after('peringkat');
            $table->text('surat_tugas_path')->after('peringkat');
            $table->text('website_penyelenggara')->after('penyelenggara')->nullable();
            $table->integer('jumlah_peserta')->after('penyelenggara');
            $table->string('no_hp')->after('nim');
            $table->boolean('verified')->after('id')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa_prestasis', function (Blueprint $table) {
            //
        });
    }
}
