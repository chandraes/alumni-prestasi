<x-slot name="section-body">
    Alumni Input
</x-slot>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-2xl py-8">
            <!-- Col -->
            <div class="w-full shadow-2xl h-auto bg-gray-400 hidden lg:block lg:w-1/3 bg-cover rounded-l-lg" style="background-image: url('/images/graduation.jpg')"></div>
            <!-- Col -->
            <div class="w-full lg:w-2/3 bg-white p-5 rounded-lg lg:rounded-l-none border-gray-800">
                <h3 class="pt-4 text-2xl text-center"><strong>Data Alumni Mahasiswa FT UNSRI</strong></h3>
                <form wire:submit.prevent="store">
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Nama Lengkap')}}"></x-jet-label>
                        <x-jet-input wire:model="nama" placeholder="   Masukan nama lengkap anda" type="text" name="nama" :value="old('nama')" id="nama" class="@error('nama') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                        <x-jet-input-error for="nama" class="mt-2" />
                    </div>
                </div>
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Nomor Handphone')}}"></x-jet-label>
                        <x-jet-input wire:model="no_hp" placeholder="   Masukan nomor handphone anda" type="text" name="no_hp" :value="old('no_hp')" id="no_hp" class="@error('no_hp') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                        <x-jet-input-error for="no_hp" class="mt-2" />
                    </div>
                </div>
                <div>
                    <div class="mt-3 relative">
                        <x-jet-label value="{{__('Alamat Sekarang')}}"></x-jet-label>
                        <textarea wire:model="alamat" placeholder="Masukan alamat" rows="6" name="alamat" :value="old('alamat')" id="alamat" class="@error('alamat') border-red-600 @enderror px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></textarea>
                        <x-jet-input-error for="alamat" class="mt-2" />
                    </div>
                </div>
                <div class="mb-2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Jurusan')}}"></x-jet-label>
                        <select wire:model="jurusan_prodi_id" id="jurusan_prodi_id" name="jurusan_prodi_id" id="jurusan_prodi_id" class="@error('jurusan_prodi_id') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600 ">
                            <option value="">-- Choose --</option>
                            @foreach($jurusan as $datajurusan)
                            <option value="{{$datajurusan->id}}" {{ $datajurusan->id == old('jurusan_prodi_id') ? 'selected' : '' }}>{{$datajurusan->nama_jurusan_prodi}} ({{$datajurusan->jenjang}})</option>
                            @endforeach
                        </select>

                    </div>
                    @error('jurusan_prodi_id')
                    <div>
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="w-full sm:w-1/2 py-1">
                    <div class="relative">
                        <x-jet-label value="{{__('Angkatan')}}"></x-jet-label>
                        <x-jet-input wire:model="angkatan" placeholder="   Masukan tahun angkatan anda" type="text" name="angkatan" :value="old('angkatan')" id="angkatan" class="@error('angkatan') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                    </div>
                    @error('angkatan')
                    <div>
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                <div class="w-full py-1 flex space-x-2">
                    <div class="sm:w1/2 w-full relative flex-1 ">
                        <x-jet-label value="{{__('Bulan Wisuda')}}"></x-jet-label>
                        <!-- <span class="absolute p-1 bottom-8 ml-2 bg-white text-gray-800 focus:text-black">{{ __('Bulan Wisuda') }}</span> -->
                        <select wire:model="bulan_wisuda" name="bulan_wisuda" id="bulan_wisuda" class="@error('bulan_wisuda') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600 ">
                            <option value="">-- Choose --</option>
                            @foreach($month as $bulan)
                            <option value="{{$bulan->id}}" {{ $bulan->id == old('bulan_wisuda') ? 'selected' : '' }}>{{$bulan->name}}</option>
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
                        <x-jet-input wire:model="tahun_wisuda" placeholder="Masukan tahun wisuda anda" type="text" name="tahun_wisuda" :value="old('tahun_wisuda')" id="tahun_wisuda" class="@error('tahun_wisuda') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                        @error('tahun_wisuda')
                        <div class="mt-1">
                            <span class="absolute text-sm text-red-600">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 w-full sm:w-full py-1 ">
                    <x-jet-label value="{{__('Status')}}"></x-jet-label>
                    <!-- <span class="p-1 bottom-8 ml-2 bg-white text-gray-800 focus:text-black">{{ __('Status Bekerja') }}</span> -->
                    <div class="mt-2 px-3 flex @error('sudah_bekerja') border-red-600 @enderror">
                        <label class="inline-flex items-center">
                            <!-- <x-jet-input autofocus  type="radio" name="sudah_bekerja" :value="old('sudah_bekerja')" id="sudah_bekerja" class=" h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input> -->
                            <input id="bekerja" wire:model.prevent="sudah_bekerja" type="radio" class="form-radio" name="sudah_bekerja" value="1">
                            <span class="ml-2">Sudah Bekerja</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input wire:model.prevent="sudah_bekerja" id="belum_bekerja" type="radio" class="form-radio" name="sudah_bekerja" value="0">
                            <span class="ml-2">Belum Bekerja</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input wire:model.prevent="sudah_bekerja" id="lanjut_kuliah" type="radio" class="form-radio" name="sudah_bekerja" value="2">
                            <span class="ml-2">Lanjut Kuliah</span>
                        </label>
                    </div>
                    @error('sudah_bekerja')
                    <div class="mt-1">
                        <span class="absolute text-sm text-red-600">{{ $message }}</span>
                    </div>
                    @enderror
                </div>
                {{$sudah_bekerja}}
                @if ($sudah_bekerja == 1)
                    <div class="w-full py-1">
                        <div class="relative">
                            <x-jet-label value="{{__('Tempat Kerja Pertama')}}"></x-jet-label>
                            <x-jet-input wire:model="tempat_bekerja_pertama" placeholder="  Kosongkan bila belum bekerja" type="text" name="tempat_bekerja_pertama" :value="old('tempat_bekerja_pertama')" id="tempat_bekerja_pertama" class="@error('tempat_bekerja_pertama') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                            <x-jet-input-error for="tempat_bekerja_pertama"></x-jet-input-error>
                        </div>
                    </div>
                    <div class="w-full py-1">
                        <div class="relative">
                            <x-jet-label value="{{__('Gaji Pertama')}}"></x-jet-label>
                            <select wire:model="gaji_pertama" name="gaji_pertama" id="gaji_pertama" class="@error('gaji_pertama') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600">
                                <option value="">-- CHOOSE --</option>
                                @foreach ($penghasilan as $gaji)
                                    <option value="{{$gaji->id}}">{{$gaji->nama_penghasilan}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="gaji_pertama"></x-jet-input-error>
                        </div>
                    </div>
                    <div class="w-full mt-2 pb-1">
                        <div class="relative">
                            <x-jet-label value="{{__('Tempat Bekerja Sekarang')}}"></x-jet-label>
                            <x-jet-input wire:model="tempat_bekerja_sekarang" placeholder="  Kosongkan bila belum bekerja" type="text" name="tempat_bekerja_sekarang" :value="old('tempat_bekerja_sekarang')" id="tempat_bekerja_sekarang" class="@error('tempat_bekerja_sekarang') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                            <x-jet-input-error for="tempat_bekerja_sekarang"></x-jet-input-error>
                        </div>
                    </div>
                    <div class="w-full py-1">
                        <div class="relative">
                            <x-jet-label value="{{__('Posisi / Jabatan')}}"></x-jet-label>
                            <x-jet-input wire:model="posisi_bagian" placeholder="  Kosongkan bila belum bekerja" type="text" name="posisi_bagian" :value="old('posisi_bagian')" id="posisi_bagian" class="@error('posisi_bagian') border-red-600 @enderror h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-purple-600"></x-jet-input>
                            <x-jet-input-error for="posisi_bagian"></x-jet-input-error>
                        </div>
                    </div>
                @elseif($sudah_bekerja == 2)
                    tes lanjut kuliah
                @endif
                
                <div class="mb-6 text-center">
                    {{-- <button wire:click.prevent="store" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" class="g-recaptcha w-full px-4 py-2 font-bold text-white bg-purple-500 rounded-full hover:bg-purple-700 focus:outline-none focus:shadow-outline" type="submit" data-sitekey="{{env('CAPTCHA_SITE_KEY')}}" data-callback='handle' data-action='submit'>
                        {{ __('Simpan') }}
                    </button> --}}
                    <button class="w-full px-4 py-2 font-bold text-white bg-purple-500 rounded-full hover:bg-purple-700 focus:outline-none focus:shadow-outline" type="submit">{{__('SIMPAN')}}</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    


