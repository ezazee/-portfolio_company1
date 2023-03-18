<!--header section start-->
        <header class="main-header w-100 z-10">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img width="250px" src="{{ URL::asset('assets/img/logo-white.png') }}" alt="logo multi kara digital" class="img-fluid logo-white" />
                        <img width="250px" src="{{ URL::asset('assets/img/logo-color.png') }}" alt="logo multi kara digital" class="img-fluid logo-color" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <i
                  class="flaticon-menu"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasWithBackdrop"
                  aria-controls="offcanvasWithBackdrop"
                ></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/">Beranda</a>
                            </li>
                            <li>
                                <a href="/tentang" class="nav-link">Tentang Kami</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="/blog">Blog</a>
                            </li>
                                
                            <li>
                                <a href="/faq" class="nav-link">FAQ</a>
                            </li>
                        </ul>
                    </div>

                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle" style="margin-right: 25px;">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i class="flaticon-moon-1 fs-lg"></i></div>
                        </a> 
                        <a href="#" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Beranda
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/tentang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tentang Kami
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/blog" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/faq" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                FAQ
                            </a>
                        </li>

                        
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="request-demo.html" class="btn btn-primary">Hubungi Kami</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
        <!--header section end-->