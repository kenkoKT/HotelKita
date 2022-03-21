<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarControllers;

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

Route::get('/home', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/.', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function(){
    return view ('home');
})->name('home');

Route::middleware('role:admin')->get('admin/kamar/dashboard', [KamarControllers::class, 'index'])->name('admin/kamar/dashboard');

Route::get('/admin/kamar/create',[KamarControllers::class, 'create'])->name('admin/kamar/create');
Route::post('/admin/kamar/store',[KamarControllers::class, 'store']);

Route::get('/admin/kamar/edit/{id}',[KamarControllers::class, 'edit'])->name('admin/kamar/edit');
Route::post('/admin/kamar/update/{id}',[KamarControllers::class, 'update']);
Route::get('/admin/kamar/hapus/{id}',[KamarControllers::class, 'delete']);

Route::get('admin/fkamar/dashboard', [FkamarControllers::class, 'index'])->name('admin/fkamar/dashboard');

Route::get('/admin/fkamar/create',[FkamarControllers::class, 'create'])->name('admin/fkamar/create');
Route::post('/admin/fkamar/store',[FkamarControllers::class, 'store']);

Route::get('/admin/fkamar/edit/{id}',[FkamarControllers::class, 'edit'])->name('admin/fkamar/edit');
Route::post('/admin/fkamar/update/{id}',[FkamarControllers::class, 'update']);
Route::get('/admin/fkamar/hapus/{id}',[FkamarControllers::class, 'delete']);


Route::middleware('role:resepsionis')->get('/dashboard_resepsionis', function(){
    return view ('resepsionis.dashboard');
})->name('resepsionis.dashboard');
