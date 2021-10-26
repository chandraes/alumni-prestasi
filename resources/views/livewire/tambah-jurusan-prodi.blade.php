<x-slot name="header_content">
    <h1>Daftar Jurusan / Prodi</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Master</a></div>
        <div class="breadcrumb-item"><a href="{{route('jurusan-prodi')}}">Jurusan / Prodi</a></div>
        <div class="breadcrumb-item"><a href="#">Tambah Jurusan / Prodi</a></div>
    </div>
</x-slot>

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900"><strong>{{ __('Jurusan / Prodi')}}</strong></h3>
                        <p class="mt-1 text-sm text-gray-600">
                            {{__('Silahkan Masukan Data Jurusan / Prodi')}}
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <form wire:submit.prevent="store">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 sm:col-span-4">
                                        <label for="feeder_id" class="block text-sm font-medium text-gray-700">{{__('Feeder ID')}}</label>
                                        <input wire:model.defer="feeder_id" placeholder="Masukan ID Feeder" type="text" name="feeder_id" id="feeder_id" autocomplete="feeder_id" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="feeder_id" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-4">
                                        <label for="kode" class="block text-sm font-medium text-gray-700">{{__('Kode Jurusan / Prodi')}}</label>
                                        <input wire:model.defer="kode" placeholder="Masukan Kode Prodi" type="text" name="kode" id="kode" autocomplete="kode" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="kode" class="mt-2" />
                                    </div>

                                    <div class="col-span-12 sm:col-span-6">
                                        <label for="nama_jurusan_prodi" class="block text-sm font-medium text-gray-700">{{__('Nama Jurusan / Prodi')}}</label>
                                        <input wire:model.defer="nama_jurusan_prodi" placeholder="Masukan nama jurusan / prodi" type="text" name="nama_jurusan_prodi" id="nama_jurusan_prodi" autocomplete="nama_jurusan_prodi" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="nama_jurusan_prodi" class="mt-2" />
                                    </div>
                                    <div class="col-span-12 sm:col-span-2">
                                        <label for="jenjang" class="block text-sm font-medium text-gray-700">{{__('Jenjang')}}</label>
                                        <input wire:model.defer="jenjang" placeholder="(S1, S2, S3)" type="text" name="jenjang" id="jenjang" autocomplete="jenjang" class="shadow-sm appearance-none border focus:border-indigo-500 focus:ring-indigo-500 border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                        <x-jet-input-error for="jenjang" class="mt-2" />
                                    </div>

                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button wire:click="store" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>