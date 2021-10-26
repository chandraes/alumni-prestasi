<x-slot name="header_content">
    <h1>Tambah User</h1>

    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('user') }}">User</a></div>
        <div class="breadcrumb-item"><a href="#">Tambah User</a></div>
    </div>
</x-slot>

<div class="md:grid md:grid-cols-3 md:gap-6 mb-4">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">User</h3>

            <p class="mt-1 text-sm text-gray-600">
                Lengkapi data berikut dan submit untuk membuat data user baru
            </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="store">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="form-group col-span-6 sm:col-span-5">
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Nama
                            </label>
                            <small>Nama Lengkap Akun</small>
                            <input class="appearance-none border border-grey-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline mt-1 block w-full form-control shadow-none" id="name" type="text" wire:model.defer="name">
                            <x-jet-input-error for="name" class="mt-2"></x-jet-input-error>
                        </div>

                        <div class="form-group col-span-6 sm:col-span-5">
                            <label class="block font-medium text-sm text-gray-700" for="email">
                                Email
                            </label>
                            <input class="appearance-none border border-grey-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline mt-1 block w-full form-control shadow-none" id="email" type="text" wire:model.defer="email">
                            <x-jet-input-error for="email" class="mt-2"></x-jet-input-error>
                        </div>

                        <div class="form-group col-span-6 sm:col-span-5">
                            <label class="block font-medium text-sm text-gray-700" for="role_id">
                                Role
                            </label>
                            <select wire:model.defer="role_id" name="role_id" id="role_id" class="appearance-none border border-grey-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline mt-1 block w-full form-control shadow-none">
                                <option value="">--Choose--</option>
                                @foreach($role as $val)
                                <option value="{{$val->id}}">{{$val->nama_role}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="role_id" class="mt-2"></x-jet-input-error>
                            <!-- <input class="appearance-none border border-grey-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline mt-1 block w-full form-control shadow-none" id="email" type="text" wire:model.defer="email"> -->
                        </div>

                        <div class="form-group col-span-6 sm:col-span-5">
                            <label class="block font-medium text-sm text-gray-700" for="password">
                                Password
                            </label>
                            <small>Minimal 4 karakter</small>
                            <input class="appearance-none border border-grey-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline mt-1 block w-full form-control shadow-none" id="password" type="password" wire:model.defer="password">
                            <x-jet-input-error for="password" class="mt-2"></x-jet-input-error>
                        </div>

                        <div class="form-group col-span-6 sm:col-span-5">
                            <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                                Konfirmasi Password
                            </label>
                            <small>Minimal 4 karakter</small>
                            <input class="appearance-none border border-grey-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline mt-1 block w-full form-control shadow-none" id="password_confirmation" type="password" wire:model.defer="password_confirmation">
                            <x-jet-input-error for="password_confirmation" class="mt-2"></x-jet-input-error>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <!-- <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('t19YAj2vRWwBnBXkBrEb').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" class="text-sm text-gray-600 mr-3">
                            Submited.
                        </div> -->


                    <button wire:click="store" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- 
    <div x-data="{ message: 'Data User Berhasil di Tambahkan', 'type': 'success' }" x-init="window.livewire.find('t19YAj2vRWwBnBXkBrEb').on('saved', () => { console.log('fired 2'); const notyf = new Notyf({ position: { x: 'center', 'y': 'button' } }); notyf[type](message); })">
    </div> -->