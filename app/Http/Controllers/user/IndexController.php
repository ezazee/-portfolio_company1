<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\HeroSectionLanding;
use App\Models\HeroTentang;
use App\Models\LayananUnggulan;
use App\Models\PerusahaanKerjasama;
use App\Models\ProdukPerusahaan;
use App\Models\TeamMkd;
use App\Models\TentangMkd;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function root(){
        $herolanding = HeroSectionLanding::all();
        $tentangmkd = TentangMkd::all();
        $perusahaan = PerusahaanKerjasama::all();
        $visimisi = VisiMisi::all();
        $layanan = LayananUnggulan::all();
        $produk = ProdukPerusahaan::all();
        $blog = Blog::all();
        return view('index', compact(
            'herolanding',
            'tentangmkd',
            'perusahaan',
            'visimisi',
            'layanan',
            'produk',
            'blog',
        ));
    }

    public function tentangmkd(){
        $herotentang = HeroTentang::all();
        $tentangmkd = TentangMkd::all();
        $perusahaan = PerusahaanKerjasama::all();
        $visimisi = VisiMisi::all();
        $produk = ProdukPerusahaan::all();
        $team = TeamMkd::all();
        return view('pages.about', compact(
            'herotentang',
            'tentangmkd',
            'perusahaan',
            'visimisi',
            'produk',
            'team',
        ));
    }

    public function blog(){
        $blog = Blog::all();
        return view('pages.blog', compact('blog'));
    }

    public function detail(Request $request, $slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blog_page', compact('blog'));
    }
}
