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
    @foreach ($herotentang as $herotentang)
        <section class="hero-section ptb-120 text-white bg-gradient" style="background: url('assets/img/hero-dot-bg.png')no-repeat center right">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                                <h1 class="fw-bold display-5">{{ $herotentang->title }}</h1>
                                <p class="lead">{{ $herotentang->deskripsi }}</p>
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
                                <img src="/images/{{ $herotentang->gambar }}" alt="hero img" class="img-fluid position-relative z-5">
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

    <!-- Team -->
         <section id="our-team" class="team-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h5 class="h6 text-primary">Team Kami</h5>
                            <h2>Orang-Orang Dibalik Berjalannya MKD</h2>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis reiciendis porro sint recusandae vitae maiores eum quis beatae quaerat eius! Alias placeat nostrum sint tempora possimus quis mollitia veniam natus?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                     @foreach ($team as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-single-wrap mb-5">
                            <div class="team-img rounded-custom">
                                <img src="/images/{{ $team->gambar }}" alt="team" class="img-fluid position-relative">
                            </div>
                            <div class="team-info mt-4 text-center">
                                <h5 class="h6 mb-1">{{ $team->nama }}</h5>
                                <p class="text-muted small mb-0">{{ $team->posisi }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    <!-- End Team -->


            <!-- Footer -->
                @include('components.footer')
            <!-- End Footer -->
    
    </div>
<!-- Script JS -->
    @include('master.script')
</body>
</html>