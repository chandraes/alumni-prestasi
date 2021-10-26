<?php

namespace App\Http\Livewire\MahasiswaPrestasi;

use App\Models\MahasiswaPrestasi;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\Gate;
use Illuminate\Filesystem\Filesystem;
use File;

class ListPrestasiTable extends LivewireDatatable
{
    
    public $hideable = 'select';
        
    public function builder()
    {
        return MahasiswaPrestasi::with('jurusan', 'kegiatan', 'tingkat_prestasi', 'jenis_prestasi');            
    }

    public function columns()
    {
        return [
            // Column::callback('id', function($id){
            //     // $dataMahasiswa = MahasiswaPrestasi::find($id)->get();
            //     return view('livewire.datatables.table-actions2', ['id' => $id]);
            // })->excludeFromExport()->unsortable(),
            BooleanColumn::name('verified')->filterable()->alignCenter(),
            Column::name('nim')->defaultSort('asc')->searchable(),
            Column::name('nama')->searchable(),
            Column::callback(['jurusan.nama_jurusan_prodi', 'jurusan.jenjang'], function($jurusan, $jenjang) {
                $full = $jenjang."-".$jurusan;
                return $full;
            })->label('Jurusan / Prodi')->filterable(),
            Column::name('kegiatan.nama_kegiatan')->label('Kegiatan')->filterable()->searchable(),
            Column::callback(['nim', 'id'], function ($nim, $id) {
                
                return view('livewire.datatables.modal', ['key' => $id, 'dm' => MahasiswaPrestasi::with('jurusan', 'kegiatan', 'tingkat_prestasi', 'jenis_prestasi')->find($id)]);
            })->alignCenter(),
        ];

      
    }

    public function delete($id)
    {
        Gate::authorize('admin');
        $db = MahasiswaPrestasi::where('id', $id);
        $surat_tugas = $db->value('surat_tugas_path');
        $undangan = $db->value('undangan_path');
        $sertifikat = $db->value('sertifikat_path');
        
        $dir=MahasiswaPrestasi::find($id);

        if(File::exists(public_path('storage/files/'.$dir->nim))){
            File::delete(public_path('storage/files/'.$surat_tugas));
            File::delete(public_path('storage/files/'.$undangan));
            File::delete(public_path('storage/files/'.$sertifikat));

            $filesystem = new Filesystem();
            $directory = public_path('\storage\\files\\').$dir->nim;
            $file_check = $filesystem->files($directory);
            if (empty($file_check)) {
                File::deleteDirectory(public_path('storage/files/'.$dir->nim));
            }
            
        }
        else{
            session()->flash('message', 'Data Has Been Deleted..');
        }
       
        MahasiswaPrestasi::find($id)->delete();
        session()->flash('message', 'Data Has Been Deleted..');
        return redirect()->to('/mahasiswa-prestasi/list');
    }

    public function verifikasi($id)
    {
        Gate::authorize('admin');
        $data = MahasiswaPrestasi::find($id);
        $data->verified = 1;
        $data->save();
        $this->refreshLivewireDatatable();
        session()->flash('message', 'Data Has Been Verified..');
        return redirect()->to('/mahasiswa-prestasi/list');

    }
}