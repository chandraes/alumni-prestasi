<?php

use App\Http\Controllers\AlumniTambahController;
use App\Http\Controllers\ListPrestasi;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Alumni;
use App\Http\Livewire\AlumniTambah;
use App\Http\Livewire\AlumniNotif;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\JurusanProdiData;
use App\Http\Livewire\KegiatanData;
use App\Http\Livewire\MahasiswaPrestasi\ListMahasiswaPrestasi;
use App\Http\Livewire\MahasiswaPrestasi\EditMahasiswaPrestasi;
use App\Http\Livewire\MahasiswaPrestasi\MahasiswaBerprestasi;
use App\Http\Livewire\MahasiswaPrestasi\ExportMahasiswaPrestasi;
use App\Http\Livewire\TambahJurusanProdi;
use App\Http\Livewire\TambahKegiatan;
use App\Http\Livewire\MahasiswaPrestasi\VerifikasiMahasiswaPrestasi;
use App\Http\Livewire\UserData;
use App\Http\Livewire\UserTambah;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/alumni', AlumniTambah::class)->name('alumni');
// Route::get('/alumni', '\App\Http\Controllers\AlumniTambahController@index' )->name('alumni');
// Route::post('/alumni/tambah', '\App\Http\Controllers\AlumniTambahController@tambah')->name('tambah-alumni');
Route::get('alumni', AlumniTambah::class)->name('alumni');
Route::get('alumni-notif', AlumniNotif::class)->name('alumni-notif');

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/alumni/data', Alumni::class)->name('alumni-data');

    Route::prefix('mahasiswa-prestasi')->group(function() {
        Route::get('/input', MahasiswaBerprestasi::class)->name('mahasiswa-prestasi');
        Route::get('/list', ListMahasiswaPrestasi::class)->name('list-mahasiswa-prestasi');
        Route::get('/edit/{id}', EditMahasiswaPrestasi::class)->name('edit-mahasiswa-prestasi');
        // Route::get('/verifikasi', VerifikasiMahasiswaPrestasi::class)->name('verifikasi-mahasiswa-prestasi');
        Route::get('/export', ExportMahasiswaPrestasi::class)->name('export-mahasiswa-prestasi')->middleware('admin');
    });
    
    
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/master/jurusan-prodi', JurusanProdiData::class)->name('jurusan-prodi');
        Route::get('/master/jurusan-prodi/tambah', TambahJurusanProdi::class)->name('tambah-jurusan-prodi');
        Route::get('/master/kegiatan', KegiatanData::class)->name('kegiatan');
        Route::get('/master/kegiatan/tambah', TambahKegiatan::class)->name('tambah-kegiatan');
        Route::get('/user', [ UserController::class, "index_view" ])->name('user');
        Route::view('/user/new', "pages.user.user-new")->name('user.new');
        Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');

        Route::get('/user-data', UserData::class)->name('user-data');
        Route::get('/user-data/tambah', UserTambah::class)->name('tambah-user');
  
    });
    
    
    
   

    // Route::get('/list-mahasiswa', '\App\Http\Controllers\ListPrestasi@index')->name('list-mahasiswa');


});
