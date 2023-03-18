<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\HeroSectionLandingController;
use App\Http\Controllers\HeroSectionTentangController;
use App\Http\Controllers\LayananUnggulanController;
use App\Http\Controllers\PerusahaanKerjasamaController;
use App\Http\Controllers\ProdukPerusahaanController;
use App\Http\Controllers\TeamKamiController;
use App\Http\Controllers\TentangMkdController;
use App\Http\Controllers\user\IndexController;
use App\Http\Controllers\VisiMisiController;

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

    // ****  USER AREA   ****** //


Route::get('/', [IndexController::class, 'root'])->name('root');

Route::get('/tentang', [IndexController::class, 'tentangmkd'])->name('tentangmkd');

Route::get('/blog', [IndexController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [IndexController::class, 'detail'])->name('detail');


Route::get('/faq', function(){
    return view('pages.faq');
});



    // ****  END USER AREA   ****** //

   





    // ****  PANEL ADMIN AREA   ****** //


    // Login & Register Routing

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');;

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // End Login & Register Routing


    // Panel Admin Prefix
Route::prefix('/admin')->middleware('auth')->group(function () {

    // Index Routing Admin Panel
    Route::get('/', [PanelController::class, 'index'])->name('dashboard');

    // Hero Section Landing Panel
    Route::resource('herolanding', HeroSectionLandingController::class);
    
    // Tentang MKD Panel
    Route::resource('tentangmkd', TentangMkdController::class);

    // Logo Perusahaan Kerjasama Panel
    Route::resource('perusahaan', PerusahaanKerjasamaController::class);

    // Visi Misi Panel
    Route::resource('visimisi', VisiMisiController::class);

    // Layanan Unggulan Panel
    Route::resource('layanan', LayananUnggulanController::class);
    
    // Produk Perusahaan Panel
    Route::resource('produk', ProdukPerusahaanController::class);
    
    // Hero Section Tentang Panel
    Route::resource('herotentang', HeroSectionTentangController::class);
    
    // Team Kami Panel
    Route::resource('team', TeamKamiController::class);

    // Blog Panel
    Route::resource('blog', BlogController::class);
    Route::post('blog/upload', [BlogController::class, 'upload'])->name('blog.upload');

    
});


    // ****  END PANEL ADMIN AREA   ****** //