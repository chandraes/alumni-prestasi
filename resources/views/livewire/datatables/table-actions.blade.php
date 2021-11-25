<div class="flex space-x-1 justify-around">
    <a href="{{ route('edit-mahasiswa-prestasi', [$id]) }}" class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
    </a>
    
    <x-modal :value="$id">
        <x-slot name="trigger">
            <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
            </button>
        </x-slot>
        {{-- <table class="table table-auto">
            <tbody align="left">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>{{$nim}}</td>
                </tr>
                <tr>
                    <td>Handphone</td>
                    <td>:</td>
                    <td>{{$hp}}</td>
                </tr>
                <tr>
                    <td>Jurusan/Prodi</td>
                    <td>:</td>
                    <td>{{$jenjang}}-{{$nama_jurusan_prodi}}</td>
                </tr>
                <tr>
                    <td>Tingkat Prestasi</td>
                    <td>:</td>
                    <td>{{$nama_tingkat_prestasi}}</td>
                </tr>
                <tr>
                    <td>Jenis Kegiatan</td>
                    <td>:</td>
                    <td>{{$nama_kegiatan}}</td>
                </tr>
                <tr>
                    <td>Penyelenggara</td>
                    <td>:</td>
                    <td>{{$penyelenggara}}</td>
                </tr>
                <tr>
                    <td>Website Penyelenggara</td>
                    <td>:</td>
                    <td><a href="{{$website_penyelenggara}}" target="_blank" class="btn btn-primary">Click here</a></td>
                </tr>
                <tr>
                    <td>Nama Kegiatan</td>
                    <td>:</td>
                    <td>{{$nama_prestasi}}</td>
                </tr>
                <tr>
                    <td>Waktu & Tempat Kegiatan</td>
                    <td>:</td>
                    <td>{{$waktu}} / {{$tempat}}</td>
                </tr>
                <tr>
                    <td>Jumlah Peserta</td>
                    <td>:</td>
                    <td>{{$jumlah_peserta}}</td>
                </tr>
                <tr>
                    <td>Peringkat</td>
                    <td>:</td>
                    <td>{{$peringkat}}</td>
                </tr>
                <tr>
                    <td>Bukti</td>
                    <td>:</td>
                    <td>
                        <div class="inline-flex" role="group" aria-label="Button group">
                            <a href="{{asset("/storage/files/" . $surat_tugas_path)}}" target="_blank" class="btn btn-sm btn-primary">Surat Tugas</a>
                            <a href="{{asset("/storage/files/" . $undangan_path)}}" target="_blank" class="btn btn-sm btn-primary">Undangan</a>
                            <a href="{{asset("/storage/files/" . $sertifikat_path)}}" target="_blank" class="btn btn-sm btn-primary">Sertifikat</a>
                        </div>
                        
                    </td>
                </tr>
            </tbody>
        </table> --}}
    </x-modal>

    @include('datatables::delete', ['value' => $id])
</div>