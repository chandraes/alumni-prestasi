 
 <div x-data="{ open: {{ isset($open) && $open ? 'true' : 'false' }}, working: false }" x-cloak wire:key="{{ $id }}">
    <span x-on:click="open = true">
        <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
        </button>
    </span>

    <div x-show="open"
        class="fixed z-50 bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
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
            class="relative bg-white rounded-lg px-4 pt-5 pb-4 overflow-y-scroll shadow-xl transform transition-all sm:max-w-2xl sm:max-h-screen sm:h-3/4 sm:w-full sm:p-6">
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
                            {{ __('View ID') }} {{ $id }}
                        </h3>
                    </div>
                    <div class="mt-2">     
                        <table class="table table-auto">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $id->nama }}</td>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
 {{-- <x-modal :value="$id">
        <x-slot name="trigger">
            
        </x-slot>
        
    </x-modal> --}}