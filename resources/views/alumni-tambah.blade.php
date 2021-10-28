<x-slot name="section-body">
    Alumni Input
</x-slot>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <!-- Row -->
    <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-2xl py-8">
        <!-- Col -->
        <div class="w-full shadow-2xl h-auto bg-gray-400 hidden lg:block lg:w-1/3 bg-cover rounded-l-lg"
            style="background-image: url('/images/graduation.jpg')"></div>
        <!-- Col -->
        <div class="w-full lg:w-2/3 bg-white p-5 rounded-lg lg:rounded-l-none border-gray-800">
            <h3 class="pt-4 text-2xl text-center text-indigo-600"><strong>Data Alumni Mahasiswa FT UNSRI</strong></h3>
            <form wire:submit.prevent="store">
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Nama Lengkap')}}"></x-jet-label>
                        <input wire:model="nama" placeholder="   Masukan nama lengkap anda" type="text" name="nama"
                            :value="old('nama')" id="nama"
                            class="@error('nama') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="nama" class="mt-2" />
                    </div>
                </div>
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Nomor Handphone')}}"></x-jet-label>
                        <input wire:model="no_hp" placeholder="   Masukan nomor handphone anda" type="text" name="no_hp"
                            :value="old('no_hp')" id="no_hp"
                            class="@error('no_hp') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="no_hp" class="mt-2" />
                    </div>
                </div>
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Alamat Sekarang')}}"></x-jet-label>
                        <textarea wire:model="alamat" placeholder="Masukan alamat" rows="6" name="alamat"
                            :value="old('alamat')" id="alamat"
                            class="@error('alamat') border-red-600 @enderror px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></textarea>
                        <x-jet-input-error for="alamat" class="mt-2" />
                    </div>
                </div>
                <div class="my-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Jurusan')}}"></x-jet-label>
                        <select wire:model="jurusan_prodi_id" id="jurusan_prodi_id" name="jurusan_prodi_id"
                            id="jurusan_prodi_id"
                            class="@error('jurusan_prodi_id') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600 ">
                            <option value="">-- Choose --</option>
                            @foreach($jurusan as $datajurusan)
                            <option value="{{$datajurusan->id}}" {{ $datajurusan->id == old('jurusan_prodi_id') ?
                                'selected' : '' }}>{{$datajurusan->nama_jurusan_prodi}} ({{$datajurusan->jenjang}})
                            </option>
                            @endforeach
                        </select>

                    </div>
                    @error('jurusan_prodi_id')
                    <div>
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="w-full mt-2 sm:w-1/2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Angkatan Masuk')}}"></x-jet-label>
                        <input wire:model="angkatan" placeholder="   Masukan tahun angkatan anda" type="text"
                            name="angkatan" :value="old('angkatan')" id="angkatan"
                            class="@error('angkatan') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                    </div>
                    @error('angkatan')
                    <div>
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="w-full py-1 mt-2 flex space-x-2">
                    <div class="sm:w1/2 w-full relative flex-1 ">
                        <x-jet-label value="{{__('Bulan Wisuda')}}"></x-jet-label>
                        <!-- <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-800 focus:text-black">{{ __('Bulan Wisuda') }}</span> -->
                        <select wire:model="bulan_wisuda" name="bulan_wisuda" id="bulan_wisuda"
                            class="@error('bulan_wisuda') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600 ">
                            <option value="">-- Choose --</option>
                            @foreach($month as $bulan)
                            <option value="{{$bulan->id}}" {{ $bulan->id == old('bulan_wisuda') ? 'selected' : ''
                                }}>{{$bulan->name}}</option>
                            @endforeach
                        </select>
                        @error('bulan_wisuda')
                        <div class="mt-1">
                            <span class="absolute text-sm text-red-600">{{ $message }}</span>

                        </div>
                        @enderror
                    </div>
                    <div class="relative flex-1 sm:w1/2 w-full">
                        <x-jet-label value="{{__('Tahun Wisuda')}}"></x-jet-label>
                        <input wire:model="tahun_wisuda" placeholder="Masukan tahun wisuda anda" type="text"
                            name="tahun_wisuda" :value="old('tahun_wisuda')" id="tahun_wisuda"
                            class="@error('tahun_wisuda') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        @error('tahun_wisuda')
                        <div class="mt-1">
                            <span class="absolute text-sm text-red-600">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('IPK')}}"></x-jet-label>
                        <input wire:model="ipk" placeholder="Contoh (3.03)" type="text" name="ipk"
                            id="ipk"
                            class="@error('ipk') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="ipk" class="mt-2" />
                    </div>
                </div>
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Nomor ijazah')}}"></x-jet-label>
                        <input wire:model="no_ijazah" placeholder="Masukan Nomor Ijazah" type="text" name="no_ijazah"
                            id="no_ijazah"
                            class="@error('no_ijazah') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="no_ijazah" class="mt-2" />
                    </div>
                </div>
                <div class="mb-4 mt-3 w-full sm:w-full py-1 ">
                    <x-jet-label value="{{__('Status')}}"></x-jet-label>
                    <!-- <span class="p-1 bottom-8 ml-2 bg-white text-gray-800 focus:text-black">{{ __('Status Bekerja') }}</span> -->
                    <div class="mt-2 px-3 flex @error('status') border-red-600 @enderror">
                        <label class="inline-flex items-center">
                            <!-- <x-jet-input autofocus  type="radio" name="sudah_bekerja" :value="old('sudah_bekerja')" id="sudah_bekerja" class=" h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input> -->
                            <input id="bekerja" wire:model.prevent="status" type="radio" class="form-radio"
                                name="status" value="1">
                            <span class="ml-2">Sudah Bekerja</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input wire:model.prevent="status" id="belum_bekerja" type="radio" class="form-radio"
                                name="status" value="0">
                            <span class="ml-2">Belum Bekerja</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input wire:model.prevent="status" id="lanjut_kuliah" type="radio" class="form-radio"
                                name="status" value="2">
                            <span class="ml-2">Lanjut Kuliah</span>
                        </label>
                    </div>
                    @error('status')
                    <div class="mt-1">
                        <span class="absolute text-sm text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                @if ($status == 1)
                <div class="w-full my-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Tempat Kerja Pertama')}}"></x-jet-label>
                        <input wire:model="tempat_bekerja_pertama" placeholder="  Kosongkan bila belum bekerja"
                            type="text" name="tempat_bekerja_pertama" :value="old('tempat_bekerja_pertama')"
                            id="tempat_bekerja_pertama"
                            class="@error('tempat_bekerja_pertama') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="tempat_bekerja_pertama"></x-jet-input-error>
                    </div>
                </div>
                <div class="w-full my-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Gaji Pertama')}}"></x-jet-label>
                        <select wire:model="penghasilan_pertama_id" name="penghasilan_pertama_id"
                            id="penghasilan_pertama_id"
                            class="@error('penghasilan_pertama_id') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600">
                            <option value="">-- CHOOSE --</option>
                            @foreach ($penghasilan as $gaji)
                            <option value="{{$gaji->id}}">{{$gaji->nama_penghasilan}}</option>
                            @endforeach
                        </select>
                        <x-jet-input-error for="gaji_pertama"></x-jet-input-error>
                    </div>
                </div>
                <div class="w-full my-2 pb-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Tempat Bekerja Sekarang')}}"></x-jet-label>
                        <input wire:model="tempat_bekerja_sekarang" placeholder="  Kosongkan bila belum bekerja"
                            type="text" name="tempat_bekerja_sekarang" :value="old('tempat_bekerja_sekarang')"
                            id="tempat_bekerja_sekarang"
                            class="@error('tempat_bekerja_sekarang') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="tempat_bekerja_sekarang"></x-jet-input-error>
                    </div>
                </div>
                <div class="w-full my-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Posisi / Jabatan')}}"></x-jet-label>
                        <input wire:model="posisi_bagian" placeholder="  Kosongkan bila belum bekerja" type="text"
                            name="posisi_bagian" :value="old('posisi_bagian')" id="posisi_bagian"
                            class="@error('posisi_bagian') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="posisi_bagian"></x-jet-input-error>
                    </div>
                </div>
                <div class="my-2 py-1">
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Alamat Kantor')}}"></x-jet-label>
                        <textarea wire:model="alamat_kantor" placeholder="Masukan alamat kantor anda" rows="6"
                            name="alamat_kantor" :value="old('alamat_kantor')" id="alamat_kantor"
                            class="@error('alamat_kantor') border-red-600 @enderror px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></textarea>
                        <x-jet-input-error for="alamat_kantor" class="mt-2" />
                    </div>
                </div>
                <div class="w-full my-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Website Kantor')}}"></x-jet-label>
                        <input wire:model="website_kantor" placeholder="  Kosongkan bila belum bekerja" type="url"
                            name="website_kantor" :value="old('website_kantor')" id="website_kantor"
                            class="@error('website_kantor') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></input>
                        <x-jet-input-error for="website_kantor"></x-jet-input-error>
                    </div>
                </div>
                <div class="w-full my-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Survey Kesesuaian Bidang Pekerjaan')}}"></x-jet-label>
                        <span class="text-gray-600 text-xs">(1 untuk Tidak Sesuai dan 5 untuk Sangat Sesuai)</span>
                        <div class="px-6 w-full">
                            <div class="mt-3">
                                <input wire:model.prevent="kesesuaian_bidang" type="range" class="w-full h-2 rounded-full relative" min="1" max="5"></input>
                                {{-- <span class="bg-purple-500 h-2 absolute left-0 top-0 rounded-full" style="width: 50%"></span> --}}
                            </div>
                            <div class="flex justify-between mt-2 text-xs text-gray-600">
                                <span class="w-8 text-left pl-1">1</span>
                                <span class="w-8 text-center pr-2">2</span>
                                <span class="w-8 text-center">3</span>
                                <span class="w-8 text-center pl-2">4</span>
                                <span class="w-8 text-right pr-1">5</span>
                            </div>
                        </div>
                        <x-jet-input-error for="kesesuaian_bidang"></x-jet-input-error>
                    </div>
                </div>
                @endif

                <div class="mb-6 mt-6 text-center">
                    {{-- <button wire:click.prevent="store" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}"
                        class="g-recaptcha w-full px-4 py-2 font-bold text-white bg-purple-500 rounded-full hover:bg-purple-700 focus:outline-none focus:shadow-outline"
                        type="submit" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" data-callback='handle'
                        data-action='submit'>
                        {{ __('Simpan') }}
                    </button> --}}
                    <button
                        class="w-full px-4 py-2 font-bold text-white bg-purple-500 rounded-full hover:bg-purple-700 focus:outline-none focus:shadow-outline"
                        type="submit">{{__('SIMPAN')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
