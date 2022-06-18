<?php

use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\BusterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\backend\master_data\TagController;
use App\Http\Controllers\backend\master_data\KategoriController;

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

Route::prefix('admin')->group(function () {
    // example
    Route::get('/dashboard', function () {
        return view('example.dashboard');
    })->name('dashboard');
    // do coding
    Route::resource('berita', BeritaController::class);
    Route::resource('tag', TagController::class);
    Route::resource('kategori', KategoriController::class);
    Route::Resource('buster', BusterController::class);
});

Route::get('/dashboard', function () {
    return view('example.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('/structure', function () {
    return view('frontend.structure.index');
});
Route::get('/structure/kaderisasi', function () {
    return view('frontend.structure.members.index');
});
Route::get('/blog', function () {
    return view('frontend.blog.index');
});
Route::get('/blog/berita', function () {
    return view('frontend.blog.single-page.index');
});
Route::get('/gallery',function(){
    return view('frontend.gallery.index');
});
Route::get('/buletin', function () {
    return view('frontend.buletin.index');
});
