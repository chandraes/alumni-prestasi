<x-slot name="header_content">
    <h1>Verifikasi Alumni</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Alumni</a></div>
        <div class="breadcrumb-item">Verifikasi</div>
    </div>
</x-slot>

<div class="bg-white overflow-hidden text-black shadow-xl sm:rounded-lg grid justify-items-center">
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 w-full">
        <div class="mt-10 sm:mt-0">
            @if(Session::has('message'))
            <div x-data="{open: true}" class="col-span-12 sm:col-span-12">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{Session::get('message')}}</span>
                    <span wire:click.prevent="{open: false}" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr align="center" style="border-bottom: 1px solid #a3a3a3">
                        <td>No</td>
                        <td>Nama</td>
                        <td>Angkatan</td>
                        <td>Jurusan / Prodi</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($alumni as $alumnis)
                    <tr style="border-bottom: 1px solid #a3a3a3">
                        <td align="center">{{$no++}}</td>
                        <td>{{$alumnis->nama}}</td>
                        <td align="center">{{$alumnis->angkatan}}</td>
                        <td>{{$alumnis->jurusan->jenjang." - ". $alumnis->jurusan->nama_jurusan_prodi}}</td>
                        <td align="center">
                            <a href="{{route('alumni-detail', ['id' => $alumnis->id ])}}" class="btn btn-primary">Detail</a>
                            <button wire:click.prevent="" class="btn btn-success">Verifikasi</button>
                            <button wire:click.prevent="" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>
