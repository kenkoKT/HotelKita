<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarControllers;
use App\Http\Controllers\FkamarControllers;
use App\Http\Controllers\FhotelControllers;
use App\Http\Controllers\ResepsionisControllers;
use App\Http\Controllers\DataReservasiControllers;
use App\Http\Controllers\TamuKamarControllers;
use App\Http\Controllers\TamuFkamarControllers;
use App\Http\Controllers\TamuFhotelControllers;
use App\Http\Controllers\CetakPDFControllers;

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

Auth::routes();

// Route::get('/.', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/',[HomeController::class, 'index'])->name('home');
//tamu
Route::middleware('role:tamu')->get('tamu/dashboard', [DataReservasiControllers::class, 'index'])->name('tamu/dashboard');
Route::post('/tamu/dashboard',[DataReservasiControllers::class, 'store'])->name('datareservasi.store');

Route::get('/tamu/kamar',[TamuKamarControllers::class, 'index'])->name('tamu.kamar');
Route::get('/tamu/fasilitas_hotel',[TamuFhotelControllers::class, 'index'])->name('tamu.fasilitas_hotel');


//print pdf
Route::get('/tamu/bukti_pemesanan',[CetakPDFControllers::class, 'index'])->name('/tamu/bukti_pemesanan');
Route::get('/tamu/bukti_pemesanan/hapus/{id}',[CetakPDFControllers::class, 'delete']);
Route::get('/tamu/cetak_bukti_pemesanan/{id}',[CetakPDFControllers::class, 'edit'])->name('/tamu/cetak_bukti_pemesanan');

//bukti pemesanan
// Route::get('/tamu/bukti_pemesanan/{id}',[CetakPDFControllers::class, 'index'])->name('/tamu/cetak_bukti_pemesanan');

//admin
Route::middleware('role:admin')->get('admin/kamar/dashboard', [KamarControllers::class, 'index'])->name('admin/kamar/dashboard');

//admin kamar
Route::get('/admin/kamar/create',[KamarControllers::class, 'create'])->name('admin/kamar/create');
Route::post('/admin/kamar/store',[KamarControllers::class, 'store']);
Route::get('/admin/kamar/edit/{id}',[KamarControllers::class, 'edit'])->name('admin/kamar/edit');
Route::post('/admin/kamar/update/{id}',[KamarControllers::class, 'update']);
Route::get('/admin/kamar/hapus/{id}',[KamarControllers::class, 'delete']);

//admin fkamar
Route::get('admin/fkamar/dashboard', [FkamarControllers::class, 'index'])->name('admin/fkamar/dashboard');
Route::get('/admin/fkamar/create',[FkamarControllers::class, 'create'])->name('admin/fkamar/create');
Route::post('/admin/fkamar/store',[FkamarControllers::class, 'store']);
Route::get('/admin/fkamar/edit/{id}',[FkamarControllers::class, 'edit'])->name('admin/fkamar/edit');
Route::post('/admin/fkamar/update/{id}',[FkamarControllers::class, 'update']);
Route::get('/admin/fkamar/hapus/{id}',[FkamarControllers::class, 'delete']);

//admin fhotel
Route::get('admin/fhotel/dashboard', [FhotelControllers::class, 'index'])->name('admin/fhotel/dashboard');
Route::get('/admin/fhotel/create',[FhotelControllers::class, 'create'])->name('admin/fhotel/create');
Route::post('/admin/fhotel/store',[FhotelControllers::class, 'store']);
Route::get('/admin/fhotel/edit/{id}',[FhotelControllers::class, 'edit'])->name('admin/fhotel/edit');
Route::post('/admin/fhotel/update/{id}',[FhotelControllers::class, 'update']);
Route::get('/admin/fhotel/hapus/{id}',[FhotelControllers::class, 'delete']);


// Route::middleware('role:resepsionis')->get('/dashboard_resepsionis', function(){
//     return view ('resepsionis.dashboard');
// })->name('resepsionis.dashboard');

Route::middleware('role:resepsionis')->get('/resepsionis/dashboard', [ResepsionisControllers::class, 'index'])->name('resepsionis/dashboard');
Route::middleware('role:resepsionis')->post('/resepsionis/dashboard/search', [ResepsionisControllers::class, 'search'])->name('resepsionis.search');
Route::middleware('role:resepsionis')->post('/resepsionis/dashboard/filter', [ResepsionisControllers::class, 'filter'])->name('resepsionis.filter');
