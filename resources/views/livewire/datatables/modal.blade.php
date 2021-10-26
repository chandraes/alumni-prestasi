<div x-data="{ open: {{ isset($open) && $open ? 'true' : 'false' }}, working: false }" x-cloak wire:key="{{ $key }}">
    <span x-on:click.defer="open = true">
        <button class="btn btn-primary">Detail
        </button>
    </span>
    <div x-show="open"
        class="fixed z-30 bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
        <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div x-show="open" x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            class="relative bg-white rounded-lg px-4 pt-5 pb-4 overflow-y-scroll shadow-xl transform transition-all sm:max-w-screen-sm sm:max-h-screen sm:h-3/4 sm:w-full sm:p-6">
            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button @click="open = false" type="button"
                    class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="w-full">
                <div class="mt-1">
                    <div class="text-center">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 text-center">
                            {{ __('Detail') }} {{ $dm->nama }}
                        </h3>
                    </div>
                    <div class="mt-2">
                        <table class="table table-auto table-bordered">
                            <tbody align="left">
                                <tr>
                                    <td>{{ __('Nama') }}</td>
                                    <td>:</td>
                                    <td>{{ $dm->nama }}</td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td>{{$dm->nim}}</td>
                                </tr>
                                <tr>
                                    <td>Handphone</td>
                                    <td>:</td>
                                    <td>{{$dm->no_hp}}</td>
                                </tr>
                                <tr>
                                    <td>Jurusan / Prodi</td>
                                    <td>:</td>
                                    <td>{{$dm->jurusan->jenjang}}-{{$dm->jurusan->nama_jurusan_prodi}}</td>
                                </tr>
                                <tr>
                                    <td>Tingkat Prestasi</td>
                                    <td>:</td>
                                    <td>{{$dm->tingkat_prestasi->nama_tingkat_prestasi}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kegiatan</td>
                                    <td>:</td>
                                    <td>{{$dm->kegiatan->nama_kegiatan}}</td>
                                </tr>
                                <tr>
                                    <td>Penyelenggara</td>
                                    <td>:</td>
                                    <td>{{$dm->penyelenggara}}</td>
                                </tr>
                                <tr>
                                    <td>Website Penyelenggara</td>
                                    <td>:</td>
                                    <td><a href="{{$dm->website_penyelenggara}}" target="_blank" class="btn btn-primary">Click here</a></td>
                                </tr>
                                <tr>
                                    <td>Nama Kegiatan</td>
                                    <td>:</td>
                                    <td>{{$dm->nama_prestasi}}</td>
                                </tr>
                                <tr>
                                    <td>Waktu & Tempat Kegiatan</td>
                                    <td>:</td>
                                    <td>{{$dm->waktu}} / {{$dm->tempat}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Peserta</td>
                                    <td>:</td>
                                    <td>{{$dm->jumlah_peserta}}</td>
                                </tr>
                                <tr>
                                    <td>Peringkat</td>
                                    <td>:</td>
                                    <td>{{$dm->peringkat}}</td>
                                </tr>
                                <tr>
                                    <td>Bukti</td>
                                    <td>:</td>
                                    <td>
                                        <div class="inline-flex" role="group" aria-label="Button group">
                                            <a href="{{asset("/storage/files/" . $dm->surat_tugas_path)}}" target="_blank" class="btn btn-sm btn-primary">Surat Tugas</a>
                                            <a href="{{asset("/storage/files/" . $dm->undangan_path)}}" target="_blank" class="btn btn-sm btn-primary">Undangan</a>
                                            <a href="{{asset("/storage/files/" . $dm->sertifikat_path)}}" target="_blank" class="btn btn-sm btn-primary">Sertifikat</a>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2">
                       <div class="inline-flex ">
                            @if ($dm->verified == true)
                                @can('admin')
                                <a href="{{route('edit-mahasiswa-prestasi', ['id' => $dm->id])}}" target="_blank" class="btn btn-dark mr-3">Edit Data</a>
                                <div class="relative z-50">
                                    @include('livewire.datatables.deleteV2', ['key' => $dm->id])
                                </div>
                                @endcan
                            @elseif($dm->verified == false)
                                @can('admin')
                                    <button class="btn btn-success mr-3" wire:click="verifikasi({{$dm->id}})">Verifikasi Data</button>
                                @endcan
                                <a href="{{route('edit-mahasiswa-prestasi', ['id' => $dm->id])}}" target="_blank" class="btn btn-dark mr-3">Edit Data</a>
                                @can('admin')
                                <div class="relative z-50">
                                    @include('livewire.datatables.deleteV2', ['key' => $dm->id])
                                </div>
                                @endcan
                            @else
                            @endif
                       </div>
                        {{-- <button wire:click="delete({{$dm->id}})" class="btn btn-danger">Hapus Data</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
