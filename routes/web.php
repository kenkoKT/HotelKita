<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminControllers;

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

Route::middleware('role:admin')->get('/dashboard', [AdminControllers::class, 'index'])->name('admin.dashboard');

Route::get('/admin/create',[AdminControllers::class, 'create'])->name('admin.create');
Route::post('/admin/store',[AdminControllers::class, 'store']);

Route::get('/admin/edit/{id}',[AdminControllers::class, 'edit'])->name('admin.edit');
Route::post('/admin/update/{id}',[AdminControllers::class, 'update']);


Route::middleware('role:resepsionis')->get('/dashboard_resepsionis', function(){
    return view ('resepsionis.dashboard');
})->name('resepsionis.dashboard');
