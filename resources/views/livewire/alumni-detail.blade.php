<x-slot name="header_content">
    <h1>Detail Alumni</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{route('alumni-data')}}">Alumni</a></div>
        <div class="breadcrumb-item"><a href="{{route('alumni-verifikasi')}}">Verifikasi</a></div>
        <div class="breadcrumb-item">Detail</div>
    </div>
</x-slot>

<div class="bg-white overflow-hidden text-black text-md shadow-xl sm:rounded-lg grid justify-items-center">
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
                <tbody>
                    @foreach ($detail as $item)
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$item->nama}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$item->alamat}}</td>
                    </tr>
                    <tr>
                        <td>Handphone</td>
                        <td>:</td>
                        <td>{{$item->no_hp}}</td>
                    </tr>
                    <tr>
                        <td>Jurusan / Prodi</td>
                        <td>:</td>
                        <td>{{$item->jurusan->jenjang . "-" . $item->jurusan->nama_jurusan_prodi}}</td>
                    </tr>
                    <tr>
                        <td>Angkatan</td>
                        <td>:</td>
                        <td>{{$item->angkatan}}</td>
                    </tr>
                    <tr>
                        <td>Bulan & Tahun Wisuda</td>
                        <td>:</td>
                        <td>{{ date('F', mktime(0, 0, 0, $item->bulan_wisuda, 10)) . " " . $item->tahun_wisuda}}</td>
                    </tr>
                    <tr>
                        <td>Nomor Ijazah</td>
                        <td>:</td>
                        <td>{{$item->no_ijazah}}</td>
                    </tr>
                    <tr>
                        <td>IPK</td>
                        <td>:</td>
                        <td>{{$item->ipk}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>{{$item->status->nama_status}}</td>
                    </tr>
                    @if ($item->status->nama_status == "Bekerja")
                    <tr>
                        <td>Tempat Kerja Pertama</td>
                        <td>:</td>
                        <td>{{$item->tempat_bekerja_pertama}}</td>
                    </tr>
                    <tr>
                        <td>Penghasilan Pertama</td>
                        <td>:</td>
                        <td>{{$item->penghasilan->nama_penghasilan}}</td>
                    </tr>
                    <tr>
                        <td>Tempat Kerja Sekarang</td>
                        <td>:</td>
                        <td>{{$item->tempat_kerja_sekarang}}</td>
                    </tr>
                    <tr>
                        <td>Posisi / Bagian</td>
                        <td>:</td>
                        <td>{{$item->posisi_bagian}}</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor</td>
                        <td>:</td>
                        <td>{{$item->alamat_kantor}}</td>
                    </tr>
                    <tr>
                        <td>Website Kantor</td>
                        <td>:</td>
                        <td><a href="{{$item->website_kantor}}" target="_blank">{{$item->website_kantor}}</a></td>
                    </tr>
                    <tr>
                        <td>Tanggal Masuk Kerja</td>
                        <td>:</td>
                        <td>{{$item->tanggal_masuk_kerja}}</td>
                    </tr>
                    <tr>
                        <td>Masa Tunggu Kerja</td>
                        <td>:</td>
                        <td>{{$item->masa_tunggu->masa_tunggu}}</td>
                    </tr>
                    <tr>
                        <td>Kesesuaian Bidang <sup>(Range 1 - 5)</sup></td>
                        <td>:</td>
                        <td>{{$item->kesesuaian_bidang}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-success w-1/3" wire:click.prevent="verifikasi">Verifikasi</button>


        </div>
    </div>
</div>
