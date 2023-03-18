<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
    @include('master.meta')
    <!-- Styling CSS -->
    @include('master.css')
</head>
<body>
    <div class="main-wrapper">

    <!-- Navbar -->
        @include('components.navbar')
    <!-- End Navbar -->

    <!--hero section start-->
    @foreach ($herolanding as $herolanding)
        <section class="hero-section ptb-120 text-white bg-gradient" style="background: url('assets/img/hero-dot-bg.png')no-repeat center right">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                                <h1 class="fw-bold display-5">{{ $herolanding->title }}</h1>
                                <p class="lead">{{ $herolanding->deskripsi }}</p>
                                <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                    <a href="request-demo.html" class="btn btn-primary me-3">Kenali Kami Lebih Dekat</a>
                                    <!-- <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0"> <i
                                            class="fas fa-play"></i> Watch Demo </a> -->
                                </div>
                                <!-- <div class="row justify-content-lg-start mt-60">
                                    <h6 class="text-white-70 mb-2">Our Top Clients:</h6>
                                    <div class="col-4 col-sm-3 my-2 ps-lg-0">
                                        <img src="assets/img/clients/client-1.svg" alt="client" class="img-fluid">
                                    </div>
                                    <div class="col-4 col-sm-3 my-2">
                                        <img src="assets/img/clients/client-2.svg" alt="client" class="img-fluid">
                                    </div>
                                    <div class="col-4 col-sm-3 my-2">
                                        <img src="assets/img/clients/client-3.svg" alt="client" class="img-fluid">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-8 mt-5">
                            <div class="hero-img position-relative circle-shape-images">
                                <!--animated shape start-->
                                <ul class="position-absolute animate-element parallax-element circle-shape-list">
                                    <li class="layer" data-depth="0.03">
                                        <img src="assets/img/circle-1.svg" alt="shape" class="circle-shape-item type-0 hero-1">
                                    </li>
                                    <li class="layer" data-depth="0.02">
                                        <img src="assets/img/circle-1.svg" alt="shape" class="circle-shape-item type-1 hero-1">
                                    </li>
                                    <li class="layer" data-depth="0.04">
                                        <img src="assets/img/circle-1.svg" alt="shape" class="circle-shape-item type-2 hero-1">
                                    </li>
                                    <li class="layer" data-depth="0.04">
                                        <img src="assets/img/circle-1.svg" alt="shape" class="circle-shape-item type-3 hero-1">
                                    </li>
                                    <li class="layer" data-depth="0.03">
                                        <img src="assets/img/circle-1.svg" alt="shape" class="circle-shape-item type-4 hero-1">
                                    </li>
                                    <li class="layer" data-depth="0.03">
                                        <img src="assets/img/circle-1.svg" alt="shape" class="circle-shape-item type-5 hero-1">
                                    </li>
                                </ul>
                                <!--animated shape end-->
                                <img src="images/{{$herolanding->gambar}}" alt="hero img" class="img-fluid position-relative z-5">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
    @endforeach
    <!--End Hero Section-->


     <!-- Tentang Kami -->
     @foreach ($tentangmkd as $tentangmkd)
         <section class="crm-integration bg-white pt-120 pb-80">
            <div class="container">
                <div class="row justify-content-between align-items-center g-4">
                    <div class="col-lg-6">
                        <div class="crm-appss-circle">
                            <img src="/images/{{ $tentangmkd->gambar }}" alt="tentang-mkd" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="crm-integration-content">
                            <div class="crm-title">
                                <span class="crm-subtitle">Tentang MKD <img src="assets/img/arrow-red.png" alt="arrow" class="ms-1"></span>
                                <h2 class="mt-2 mb-3">{{ $tentangmkd->title }}</h2>
                                <p>{{ $tentangmkd->deskripsi }}</p>
                            </div>
                            <a href="/tentang" class="btn btn-primary mt-4">Detail Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     @endforeach
    <!-- End Tentang Kami -->


    <!-- Carousel Logo Start -->
        <section class="digtal-marketing-logo pb-120">
            <div class="container">
                <div class="bg-light-subtle shadow-sm py-5 px-4 rounded-3">
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <h4 class="mb-4">Perusahaan yang sudah bekerja sama dengan kami</h4>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <div class="swiper digi-logo-slider">
                                <div class="swiper-wrapper">
                                     @foreach ($perusahaan as $perusahaan)
                                    <div class="swiper-slide">
                                        <div class="single-logo">
                                            <img src="/images/{{ $perusahaan->gambar }}" class="img-fluid" height="30" alt="logo" />
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Carousel Logo -->


    <!-- Visi Misi -->
    @foreach ($visimisi as $visimisi)
        <section class="feature-section-two ptb-120 bg-white">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-heading">
                                <h5 class="h6 text-primary">Visi & Misi </h5>
                                <h2>{{ $visimisi->title }}</h2>
                                <p>{{ $visimisi->deskripsi }}</p>
                                <ul class="list-unstyled mt-5">
                                    <li class="d-flex align-items-start mb-4">
                                        <div class="icon-box bg-primary rounded me-4">
                                            <i class="fa-regular fa-eye text-white"></i>
                                        </div>
                                        <div class="icon-content">
                                            <h3 class="h5">Visi</h3>
                                            <p>{{ $visimisi->visi }}</p>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-start mb-4">
                                        <div class="icon-box bg-primary rounded me-4">
                                            <i class="fas fa-fingerprint text-white"></i>
                                        </div>
                                        <div class="icon-content">
                                            <h3 class="h5">Misi</h3>
                                            <p>{{ $visimisi->misi }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                             <img src="/images/{{ $visimisi->gambar }}" alt="visimisi mkd" class="img-fluid rounded-custom">
                        </div>
                    </div>
                </div>
            </section>
    @endforeach
    <!-- End Visi Misi -->

    <!-- Layanan Kami -->
        <section class="services-icon ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2>Layanan Unggulan Kami</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste cum alias eius vel natus optio ducimus, iure dolore molestias quo corrupti doloremque odit ipsam laudantium possimus a expedita repudiandae ratione!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                     @foreach ($layanan as $layanan)
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="/images/{{ $layanan->gambar }}" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5">{{ $layanan->title }}</h3>
                                <p>
                                    {{ $layanan->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    <!-- End Layanan Kami -->

    
    <!-- Produk Kami -->
         <section class="integration-section ptb-120">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading">
                            <h4 class="h5 text-primary">Produk Kami</h4>
                            <h2>Produk Anak Perusahaan Dari Multi Kara Digital</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, labore porro dignissimos illum facilis voluptate ipsum. Eos tenetur rerum atque. Deserunt commodi enim dolores. Dolorem ratione harum sint culpa quod?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <!--animated shape start-->
                            <ul class="position-absolute animate-element parallax-element shape-service z--1">
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/dot-dot-wave-shape.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="assets/img/feature-3.svg" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->
                            <ul class="integration-list list-unstyled mb-0">
                                @foreach ($produk as $produk)
                                <li>
                                    <a href="{{ $produk->link }}" class="single-integration bg-white">
                                        <img src="/images/{{ $produk->gambar }}" alt="integration" class="img-fluid">
                                        <h6 class="mb-0 mt-4">{{ $produk->title }}</h6>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Produk Kami -->


    <!-- Blog Carousel -->
         <section class="home-blog-section ptb-120 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="text-primary h5">Blog MKD</h4>
                            <h2>Ikuti Insight dari MKD</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, inventore corporis, asperiores vero neque fuga laborum eaque, optio rerum facere officiis error perferendis aperiam reiciendis incidunt. Eos ipsa enim repellat?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach ($blog->take(3) as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="/isi-blog" class="article-img">
                                <img src="/images/{{ $blog->gambar }}" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <a href="/isi-blog">
                                    <h2 class="h5 article-title limit-2-line-text">{{ $blog->title }}</h2>
                                </a>
                                <p class="limit-2-line-text">{!! $blog->deskripsi !!}</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar-info">
                                            <span class="small fw-medium text-muted">{{ $blog->created_at->format('d F Y') }}</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">Lihat Semua Artikel</a>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Blog Carousel -->






            <!-- Footer -->
                @include('components.footer')
            <!-- End Footer -->
    
    </div>
<!-- Script JS -->
    @include('master.script')
</body>
</html>