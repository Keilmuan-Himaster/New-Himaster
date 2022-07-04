<?php

use App\Http\Controllers\backend\AnggotaController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\BusterController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\InventarisController;
use App\Http\Controllers\backend\KalenderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\master_data\TagController;
use App\Http\Controllers\backend\master_data\KategoriController;
use App\Http\Controllers\backend\master_data\StrukturController;
use App\Http\Controllers\HomeController;

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

Route::prefix('admin')->middleware('auth')->group(function () {
    // example
    Route::get('/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');
    // do coding
    Route::resource('berita', BeritaController::class);
    Route::get('/berita/show/{id}', [BeritaController::class, 'show']);
    Route::get('berita/gambar/delete/{id}', [BeritaController::class, 'show']);
    Route::resource('tag', TagController::class);
    Route::resource('kategori', KategoriController::class);
    Route::Resource('buster', BusterController::class);
    Route::Resource('anggota', AnggotaController::class);
    Route::Resource('struktur', StrukturController::class);
    Route::Resource('gallery', GaleriController::class);
    Route::Resource('kalender', KalenderController::class);
    Route::Resource('inventaris', InventarisController::class);
    Route::post('/kalender/create',[KalenderController::class, 'create']);
    Route::post('/kalender/update',[KalenderController::class, 'update']);
    Route::post('/kalender/delete',[KalenderController::class, 'destroy']);
});

// Route::get('/dashboard', function () {
//     return view('example.dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/structure', [HomeController::class, 'structure'])->name('structure');
Route::get('/structure/{id}', [HomeController::class, 'members'])->name('members');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'singleBlog'])->name('single-blog');
Route::get('/gallery',[HomeController::class, 'gallery'])->name('gallery');
Route::get('/buletin', [HomeController::class, 'buletin'])->name('buletin');
Route::get('/kalender', [HomeController::class, 'kalender'])->name('kalender');
