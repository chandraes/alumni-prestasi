<?php

namespace App\Http\Livewire;

use App\Models\Alumni;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Illuminate\Support\Facades\Gate;


class AlumniTable extends LivewireDatatable
{
    public $model = Alumni::class;
    public $hideable = 'select';
    public $exportable = true;

    // public function builder()
    // {
    //     return Alumni::with('jurusan', 'penghasilan', 'status');
    // }
    public function columns()
    {
        return [
            Column::callback('id', function($id){
                return view('livewire.datatables.delete', ['value' =>$id]);
            })->label('Act')->alignCenter()->excludeFromExport(),
            BooleanColumn::name('verified')->filterable()->alignCenter(),
            Column::name('nama')->searchable(),
            Column::name('no_hp')->label('No HP'),
            Column::name('alamat')->truncate(8),
            Column::callback(['jurusan.nama_jurusan_prodi', 'jurusan.jenjang'], function($jurusan, $jenjang) {
                $full = $jenjang."-".$jurusan;
                return $full;
            })->label('Jurusan / Prodi')->filterable(),
            // Column::raw('concat(nama_jurusan_prodi, " (", jenjang,")")')->alignCenter()->label('Jurusan / Prodi')->filterable()->searchable(),
            NumberColumn::name('angkatan')->alignCenter()->searchable()->filterable(),
            Column::callback('bulan_wisuda', function($bulan_wisuda){
                $nama_bulan = date("F", mktime(0,0,0, $bulan_wisuda,10));
                return $nama_bulan;
            })->exportcallback(function ($bulan_wisuda) {
                $nama_bulan = date("F", mktime(0,0,0, $bulan_wisuda,10));
                return $nama_bulan;
            })->alignCenter()->label("Bulan Wisuda")->filterable([1,2,3,4,5,6,7,8,9,10,11,12]),
            NumberColumn::name('tahun_wisuda')->alignCenter()->searchable()->filterable(),
            Column::name('no_ijazah')->alignCenter(),
            Column::name('status.nama_status')->alignCenter()->label('Status')->searchable(),
            Column::name('tempat_bekerja_pertama'),
            Column::name('penghasilan.nama_penghasilan')->label('Gaji Pertama'),
            Column::name('tempat_bekerja_sekarang'),
            DateColumn::name('tanggal_masuk_kerja'),
            Column::name('alamat_kantor'),
            Column::name('website_kantor'),
            Column::name('posisi_bagian')->label('Posisi / Bagian'),
            Column::name('masa_tunggu.masa_tunggu')->label('Masa Tunggu Kerja'),
        ];
    }

    public function delete($id){
        Gate::authorize('admin');
        Alumni::find($id)->delete();
        session()->flash('message', 'Data Has Been Deleted..');
        return redirect()->to('/alumni/data');
   }
}
