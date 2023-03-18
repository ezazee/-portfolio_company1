<!DOCTYPE html>
<html lang="en">
<head>
    @include('master-admin.meta')
    @include('master.css')
</head>
<body>

    
    <div class="main-wrapper">
        <section class="sign-up-in-section bg-dark ptb-60" style="background: url('assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="/login" class="mb-4 d-block text-center"><img src="assets/img/logo-white.png" alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="h3">Selamat Datang Di Panel Admin</h1>
                            <p class="text-muted">Login Terlebih Dahulu Untuk Mengakses Panel Admin</p>
                            <div class="position-relative d-flex align-items-center justify-content-center mt-4 py-4">
                                <span class="divider-bar"></span>
                                <h6 class="position-absolute text-center divider-text bg-light-subtle mb-0">Login</h6>
                            </div>
                            <form method="post" action="/loginuser" class="mt-4 register-form">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input name="email" type="email" class="form-control" placeholder="Email" id="email" required aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input name="password" type="password" class="form-control" placeholder="Password" id="password" required aria-label="Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3 d-block w-100">Submit</button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Belum ada Akun Panel ?
                                <br>    
                                <a href="/register" class="text-decoration-none">Daftar</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<!-- Vendor Script -->
@include('master.script')

</body>
</html>