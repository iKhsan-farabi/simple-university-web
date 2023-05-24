<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\ProfileController;
use App\Models\Activity;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 // Halaman Landing Page
// Route::get('/', function () {
//     return view('welcome')->name('welcome');
// });

//  Halaman View Data User
Route::get('/dosen', [HomeController::class , 'dosen'])->name('dosen');
Route::get('/matkul', [HomeController::class , 'matkul'])->name('matkul');
Route::get('/news', [NewsController::class , 'lihat'])->name('news');


// Halaman View Blog
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/beasiswa', [HomeController::class , 'beasiswa'])->name('beasiswa');

// Landing Page
Route::get('/home', [HomeController::class , 'index'])->name('home');

// Halaman Log Aktivitas
Route::get('/activity' , [ActivityController::class , 'index'])->name('activity.index');

// Autentikasi
Auth::routes();
// Halaman Dashboard
Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');

// Halaman Pendidik / Dosen
Route::resource('admin/pendidik', PendidikController::class);
Route::get('admin/pimpinan', [PendidikController::class, 'pimpinan'])->name('pendidik.pimpinan');
//  Halaman  Matkul
Route::resource('admin/matkul', MatkulController::class);
// Halaman Beasiswa
Route::resource('admin/beasiswa', BeasiswaController::class);
// Halaman Kegiatan
Route::resource('admin/news', NewsController::class);
// Halamman Visimisi
Route::resource('admin/profile' , ProfileController::class);




