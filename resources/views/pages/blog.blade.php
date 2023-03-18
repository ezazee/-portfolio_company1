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

    <!-- Hero Section -->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-heading text-center">
                            <h1 class="display-5 fw-bold">Blog MKD</h1>
                            <p class="lead mb-0">Ikuti Insight dari MKD</p>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
    <!-- End Hero Section -->


    <!-- List Blog -->
        <section class="masonary-blog-section ptb-120">
            <div class="container">
                <div class="row">
                    @foreach ($blog as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom my-3">
                            <a href="{{ route('detail', $blog->slug) }}" class="article-img">
                                <img src="/images/{{ $blog->gambar }}" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <a href="{{ route('detail', $blog->slug) }}">
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

            </div>
        </section>
    <!-- End List Blog -->


            <!-- Footer -->
                @include('components.footer')
            <!-- End Footer -->
    
    </div>
<!-- Script JS -->
    @include('master.script')
</body>
</html>