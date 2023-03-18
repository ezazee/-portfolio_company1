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

    <!-- Isi Blog -->
    <section class="blog-details ptb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-8 pe-lg-5">
                        <img width="350px" class="mb-5" src="/images/{{ $blog->gambar }}" alt="{{ $blog->title }}">
                        <p>{{ $blog->created_at->format('d F Y') }}</p>
                        <h1 class="mb-5">{{ $blog->title }}</h1>
                        <div class="blog-details-wrap">
                            {!! $blog->deskripsi !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Isi Blog -->



            <!-- Footer -->
                @include('components.footer')
            <!-- End Footer -->
    
    </div>
<!-- Script JS -->
    @include('master.script')
</body>
</html>