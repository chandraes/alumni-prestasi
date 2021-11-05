<x-slot name="header_content">
    <h1>{{__('Mahasiswa Berprestasi')}}</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Mahasiswa Prestasi</a></div>
        <div class="breadcrumb-item">Input</div>
    </div>
</x-slot>
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900"><strong>{{ __('Mahasiswa Berprestasi')}}</strong></h3>
                        <p class="mt-1 text-sm text-gray-600">
                            {{__('Silahkan Masukan Data Mahasiswa Berprestasi')}}
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                           <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-12 gap-6">
                                    @if(Session::has('message'))
                                    <div class="col-span-12 sm:col-span-12">
                                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                            <span class="block sm:inline">{{Session::get('message')}}</span>
                                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <title>Close</title>
                                                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="nim" class="block text-sm font-medium text-gray-700">{{__('NIM')}}</label>
                                        <input wire:model.defer="nim" placeholder="Masukan NIM Mahasiswa" type="text" name="nim" id="nim" autocomplete="nim" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="nim" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="nama" class="block text-sm font-medium text-gray-700">{{__('Nama')}}</label>
                                        <input wire:model.defer="nama" placeholder="Masukan nama mahasiswa" type="text" name="nama" id="nama" autocomplete="name" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="nama" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="no_hp" class="block text-sm font-medium text-gray-700">{{__('Nomor Handphone')}}</label>
                                        <input wire:model.defer="no_hp" placeholder="Contoh (085208202030)" type="text" name="no_hp" id="no_hp" autocomplete="no_hp" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="no_hp" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="jurusan_id" class="block text-sm font-medium text-gray-700">{{__('Jurusan / Prodi')}}</label>
                                        <select wire:model.defer="jurusan_id" id="jurusan_id" name="jurusan_id" autocomplete="jurusan_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">-- Choose --</option>
                                            @foreach($jurusan as $data)
                                            <option value="{{$data->id}}">{{$data->kode}}-{{$data->nama_jurusan_prodi}} ({{$data->jenjang}})</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="jurusan_id" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="kegiatan_id" class="block text-sm font-medium text-gray-700">{{__('Kegiatan')}}</label>
                                        <select wire:model.defer="kegiatan_id" id="kegiatan_id" name="kegiatan_id" autocomplete="kegiatan_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">-- Choose --</option>
                                            @foreach($kegiatan as $value)
                                            <option value="{{$value->id}}">{{$value->nama_kegiatan}}</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="kegiatan_id" class="mt-2" />
                                    </div>

                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="jenis_prestasi_id" class="block text-sm font-medium text-gray-700">{{__('Jenis Prestasi')}}</label>
                                        <select wire:model.defer="jenis_prestasi_id" id="jenis_prestasi_id" name="jenis_prestasi_id" autocomplete="jenis_prestasi_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">-- Choose --</option>
                                            @foreach($jenis_prestasi as $jenis)
                                            <option value="{{$jenis->id}}">{{$jenis->nama_jenis_prestasi}}</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="jenis_prestasi_id" class="mt-2" />
                                    </div>

                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="tingkat_prestasi_id" class="block text-sm font-medium text-gray-700">{{__('Tingkat Prestasi')}}</label>
                                        <select wire:model.defer="tingkat_prestasi_id" id="tingkat_prestasi_id" name="tingkat_prestasi_id" autocomplete="tingkat_prestasi_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="">-- Choose --</option>
                                            @foreach($tingkat_prestasi as $tingkat)
                                            <option value="{{$tingkat->id}}">{{$tingkat->nama_tingkat_prestasi}}</option>
                                            @endforeach
                                        </select>
                                        <x-jet-input-error for="tingkat_prestasi_id" class="mt-2" />
                                    </div>

                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="waktu" class="block text-sm font-medium text-gray-700">{{__('Waktu')}}</label>
                                        <input wire:model.defer="waktu" type="date" name="waktu" id="waktu" autocomplete="waktu" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="waktu" class="mt-2" />
                                    </div>

                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="tempat" class="block text-sm font-medium text-gray-700">{{__('Tempat Penyelenggara')}}</label>
                                        <input wire:model.defer="tempat" type="text" name="tempat" id="tempat" autocomplete="tempat" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="tempat" class="mt-2" />
                                    </div>

                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="prestasi" class="block text-sm font-medium text-black-800">Nama Kegiatan</label>
                                        <input wire:model.defer="prestasi" placeholder="Masukan jenis prestasi yang didapatkan" type="text" name="prestasi" id="prestasi" autocomplete="prestasi" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="prestasi" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="penyelenggara" class="block text-sm font-medium text-black-800">Penyelenggara</label>
                                        <input wire:model.defer="penyelenggara" placeholder="Masukan instansi penyelenggara" type="text" name="penyelenggara" id="penyelenggara" autocomplete="penyelenggara" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="penyelenggara" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <label for="website_penyelenggara" class="block text-sm font-medium text-black-800">Website Penyelenggara</label>
                                        <input wire:model.defer="website_penyelenggara" placeholder="Contoh (https://unsri.ac.id/)" type="text" name="website_penyelenggara" id="website_penyelenggara" autocomplete="website_penyelenggara" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="website_penyelenggara" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-4">
                                        <label for="jumlah_peserta" class="block text-sm font-medium text-black-800">Jumlah Peserta</label>
                                        <input wire:model.defer="jumlah_peserta" placeholder="Contoh (30, 15, 90)" type="number" name="jumlah_peserta" id="jumlah_peserta" autocomplete="jumlah_peserta" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="jumlah_peserta" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-4">
                                        <label for="peringkat" class="block text-sm font-medium text-black-800">Peringkat</label>
                                        <input wire:model.defer="peringkat" placeholder="Contoh (1, 2, 3)" type="number" name="peringkat" id="peringkat" autocomplete="peringkat" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="peringkat" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label for="undangan" class="block text-sm font-medium text-black-800">Upload Undangan <strong>(Max 10Mb)</strong></label>
                                            <input wire:model="undangan" type="file" name="undangan" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                            <div x-show.transition="isUploading" class="shadow w-full bg-grey-light mt-2">
                                                <div class="bg-indigo-900 text-xs leading-none py-1 text-center rounded-md text-white" :style="`width: ${progress}%`">
                                                </div>
                                            </div>
                                            <x-jet-input-error for="undangan" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label for="surat_tugas" class="block text-sm font-medium text-black-800">Upload Surat Tugas <strong>(Max 10Mb)</strong></label>
                                            <input wire:model="surat_tugas" type="file" name="surat_tugas" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                            <div x-show.transition="isUploading" class="shadow w-full bg-grey-light mt-2">
                                                <div class="bg-indigo-900 text-xs leading-none py-1 text-center rounded-md text-white" :style="`width: ${progress}%`">
                                                </div>
                                            </div>

                                            <x-jet-input-error for="surat_tugas" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-12">
                                        <div x-data="{ isUploading: false, progress: 5 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false; progress = 5" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label for="bukti" class="block text-sm font-medium text-black-800">Upload Sertifikat <strong>(Max 10Mb)</strong></label>
                                            <input wire:model="bukti" type="file" name="bukti" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                            <div x-show.transition="isUploading" class="shadow w-full bg-grey-light mt-2">
                                                <div class="bg-indigo-900 text-xs leading-none py-1 text-center rounded-md text-white" :style="`width: ${progress}%`">
                                                </div>
                                            </div>
                                            <x-jet-input-error for="bukti" class="mt-2" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button wire:click.prevent="store" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
