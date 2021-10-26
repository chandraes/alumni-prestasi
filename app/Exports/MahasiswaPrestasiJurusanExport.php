<?php

namespace App\Exports;

use App\Models\MahasiswaPrestasi;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MahasiswaPrestasiJurusanExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function __construct(int $jurusan_id)
    {
        $this->jurusan_id = $jurusan_id;
    }

    public function query()
    {
        return MahasiswaPrestasi::query()->with('jurusan', 'tingkat_prestasi', 'jenis_prestasi', 'kegiatan')->where('jurusan_prodi_id', $this->jurusan_id);
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NIM',
            'Handphone',
            'Jenjang',
            'Jurusan / Prodi',
            'Kegiatan',
            'Tingkat Prestasi',
            'Jenis Prestasi',
            'Nama Kegiatan',
            'Waktu Kegiatan',
            'Tempat Kegiatan',
            'Penyelenggara',
            'Website Penyelenggara',
            'Jumlah Peserta',
            'Peringkat',

        ];
    }

    public function map($mahasiswa_prestasi): array
    {
        return [
            $mahasiswa_prestasi->nama,
            $mahasiswa_prestasi->nim,
            $mahasiswa_prestasi->no_hp,
            $mahasiswa_prestasi->jurusan->jenjang,
            $mahasiswa_prestasi->jurusan->nama_jurusan_prodi,
            $mahasiswa_prestasi->kegiatan->nama_kegiatan,
            $mahasiswa_prestasi->tingkat_prestasi->nama_tingkat_prestasi,
            $mahasiswa_prestasi->jenis_prestasi->nama_jenis_prestasi,
            $mahasiswa_prestasi->nama_prestasi,
            $mahasiswa_prestasi->waktu,
            $mahasiswa_prestasi->tempat,
            $mahasiswa_prestasi->penyelenggara,
            $mahasiswa_prestasi->website_penyelenggara,
            $mahasiswa_prestasi->jumlah_peserta,
            $mahasiswa_prestasi->peringkat,
        ];
    }
}