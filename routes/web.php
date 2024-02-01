<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DetailSyaratController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DokumenPendukungController;
use App\Http\Controllers\GambarWisataController;
use App\Http\Controllers\PersyaratanDokumenController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//auth
Route::get('/loginIndex', [AuthController::class, 'loginIndex']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

//WEB
Route::get('/', [WebController::class, 'beranda']);
Route::get('/profil', [WebController::class, 'profile']);
Route::get('/visi-misi', [WebController::class, 'visimisi']);
Route::get('/tugas-fungsi', [WebController::class, 'tugasfungsi']);
Route::get('/struktur-pejabat', [WebController::class, 'strukturpejabat']);
Route::get('/beritas', [WebController::class, 'berita']);
Route::get('/beritas/{slug}', [WebController::class, 'beritadetail']);

Route::get('/wisatas', [WebController::class, 'wisata']);
Route::get('/wisata-detail/{slug}/{id}', [WebController::class, 'detailwisata']);

Route::get('/kontak', [WebController::class, 'kontak']);
Route::get('/hasilpencarian', [WebController::class, 'hasilpencarian']);

Route::post('/pencarian', [PencarianController::class, 'pencarian']);
Route::get('/detailpencarian/{id}', [PencarianController::class, 'detailpencarian']);

Route::get('/data-profesi', [StatistikController::class, 'profesi']);
Route::get('/data-pendidikan', [StatistikController::class, 'pendidikan']);
Route::get('/data-agama', [StatistikController::class, 'agama']);
Route::get('/data-gender', [StatistikController::class, 'gender']);



//dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/heros',[HeroController::class,'get']);
Route::get('/hero/create',[HeroController::class,'create']);
Route::post('/hero/store',[HeroController::class,'store']);
Route::get('/hero/{id}/edit',[HeroController::class,'edit']);
Route::put('/hero/{id}',[HeroController::class,'update']);
Route::delete('/hero/{id}/destroy',[HeroController::class,'destroy']);

Route::get('/layanans',[LayananController::class,'get']);
Route::get('/layanan/create',[LayananController::class,'create']);
Route::post('/layanan/store',[LayananController::class,'store']);
Route::get('/layanan/{id}/edit',[LayananController::class,'edit']);
Route::put('/layanan/{id}',[LayananController::class,'update']);
Route::delete('/layanan/{id}/destroy',[LayananController::class,'destroy']);

Route::get('/pejabats',[PejabatController::class,'get']);
Route::get('/pejabat/create',[PejabatController::class,'create']);
Route::post('/pejabat/store',[PejabatController::class,'store']);
Route::get('/pejabat/{id}/edit',[PejabatController::class,'edit']);
Route::put('/pejabat/{id}',[PejabatController::class,'update']);
Route::delete('/pejabat/{id}/destroy',[PejabatController::class,'destroy']);

Route::get('/pengumuman',[PengumumanController::class,'get']);
Route::get('/pengumuman/create',[PengumumanController::class,'create']);
Route::post('/pengumuman/store',[PengumumanController::class,'store']);
Route::get('/pengumuman/{id}/edit',[PengumumanController::class,'edit']);
Route::put('/pengumuman/{id}',[PengumumanController::class,'update']);
Route::delete('/pengumuman/{id}/destroy',[PengumumanController::class,'destroy']);

Route::get('/pengumuman',[PengumumanController::class,'get']);
Route::get('/pengumuman/create',[PengumumanController::class,'create']);
Route::post('/pengumuman/store',[PengumumanController::class,'store']);
Route::get('/pengumuman/{id}/edit',[PengumumanController::class,'edit']);
Route::put('/pengumuman/{id}',[PengumumanController::class,'update']);
Route::delete('/pengumuman/{id}/destroy',[PengumumanController::class,'destroy']);

Route::get('/admin/berita',[BeritaController::class,'get']);
Route::get('/admin/berita/create',[BeritaController::class,'create']);
Route::post('/admin/berita/store',[BeritaController::class,'store']);
Route::get('/admin/berita/{id}/edit',[BeritaController::class,'edit']);
Route::put('/admin/berita/{id}',[BeritaController::class,'update']);
Route::delete('/admin/berita/{id}/destroy',[BeritaController::class,'destroy']);

Route::get('/admin/persyaratan_dokumen',[PersyaratanDokumenController::class,'get']);
Route::get('/admin/persyaratan_dokumen/create',[PersyaratanDokumenController::class,'create']);
Route::post('/admin/persyaratan_dokumen/store',[PersyaratanDokumenController::class,'store']);
Route::get('/admin/persyaratan_dokumen/{id}/edit',[PersyaratanDokumenController::class,'edit']);
Route::put('/admin/persyaratan_dokumen/{id}',[PersyaratanDokumenController::class,'update']);
Route::delete('/admin/persyaratan_dokumen/{id}/destroy',[PersyaratanDokumenController::class,'destroy']);

Route::get('/admin/detail_syarat/{id}',[DetailSyaratController::class,'get']);
Route::get('/admin/detail_syarat/create/{id}',[DetailSyaratController::class,'create']);
Route::post('/admin/detail_syarat/store/{id}',[DetailSyaratController::class,'store']);
Route::get('/admin/detail_syarat/{id}/edit',[DetailSyaratController::class,'edit']);
Route::put('/admin/detail_syarat/{id}',[DetailSyaratController::class,'update']);
Route::delete('/admin/detail_syarat/{id}/destroy/{persyaratan_dokumen_id}',[DetailSyaratController::class,'destroy']);

Route::get('/admin/dokumen_pendukung/{id}',[DokumenPendukungController::class,'get']);
Route::get('/admin/dokumen_pendukung/create/{id}',[DokumenPendukungController::class,'create']);
Route::post('/admin/dokumen_pendukung/store/{id}',[DokumenPendukungController::class,'store']);
Route::get('/admin/dokumen_pendukung/{id}/edit',[DokumenPendukungController::class,'edit']);
Route::put('/admin/dokumen_pendukung/{id}',[DokumenPendukungController::class,'update']);
Route::delete('/admin/dokumen_pendukung/{id}/destroy/{persyaratan_dokumen_id}',[DokumenPendukungController::class,'destroy']);

Route::get('/admin/penduduk',[PendudukController::class,'get']);
Route::get('/admin/penduduk/create',[PendudukController::class,'create']);
Route::post('/admin/penduduk/store',[PendudukController::class,'store']);
Route::get('/admin/penduduk/{id}/edit',[PendudukController::class,'edit']);
Route::put('/admin/penduduk/{id}',[PendudukController::class,'update']);
Route::delete('/admin/penduduk/{id}/destroy',[PendudukController::class,'destroy']);

Route::get('/admin/wisata',[WisataController::class,'get']);
Route::get('/admin/wisata/create',[WisataController::class,'create']);
Route::post('/admin/wisata/store',[WisataController::class,'store']);
Route::get('/admin/wisata/{id}/edit',[WisataController::class,'edit']);
Route::put('/admin/wisata/{id}',[WisataController::class,'update']);
Route::delete('/admin/wisata/{id}/destroy',[WisataController::class,'destroy']);

Route::get('/admin/dokumen',[DokumenController::class,'get']);
Route::get('/admin/dokumen/create',[DokumenController::class,'create']);
Route::post('/admin/dokumen/store',[DokumenController::class,'store']);
Route::get('/admin/dokumen/{id}/edit',[DokumenController::class,'edit']);
Route::put('/admin/dokumen/{id}',[DokumenController::class,'update']);
Route::delete('/admin/dokumen/{id}/destroy',[DokumenController::class,'destroy']);

Route::get('/admin/gambar_wisata/{id}',[GambarWisataController::class,'get']);
Route::get('/admin/gambar_wisata/create/{id}',[GambarWisataController::class,'create']);
Route::post('/admin/gambar_wisata/store/{id}',[GambarWisataController::class,'store']);
Route::get('/admin/gambar_wisata/{id}/edit',[GambarWisataController::class,'edit']);
Route::put('/admin/gambar_wisata/{id}',[GambarWisataController::class,'update']);
Route::delete('/admin/gambar_wisata/{id}/destroy/{persyaratan_dokumen_id}',[GambarWisataController::class,'destroy']);



