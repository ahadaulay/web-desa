<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DetailSyaratController;
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
Route::get('/berita-detail', [WebController::class, 'detailberita']);
Route::get('/galeri', [WebController::class, 'galeri']);
Route::get('/kontak', [WebController::class, 'kontak']);



//dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard']);

Route::get('/heros',[HeroController::class,'get']);
Route::get('/hero/create',[HeroController::class,'create']);
Route::post('/hero/store',[HeroController::class,'store']);
Route::get('/hero/{id}/edit',[HeroController::class,'edit']);
Route::put('/hero/{id}',[HeroController::class,'update']);
Route::delete('/hero/{id}/destroy',[HeroController::class,'destroy']);

Route::get('/layanan',[LayananController::class,'get']);
Route::get('/layanan/create',[LayananController::class,'create']);
Route::post('/layanan/store',[LayananController::class,'store']);
Route::get('/layanan/{id}/edit',[LayananController::class,'edit']);
Route::put('/layanan/{id}',[LayananController::class,'update']);
Route::delete('/layanan/{id}/destroy',[LayananController::class,'destroy']);

Route::get('/pejabat',[PejabatController::class,'get']);
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




