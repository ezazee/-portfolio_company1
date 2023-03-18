<!DOCTYPE html>
<html lang="en">
<head>
    @include('master-admin.meta')
    @include('master-admin.css')
</head>
<body>
    <!-- Layout -->
    <div id="layout-wrapper">

        <!-- Topbar -->
            @include('components-admin.topbar')
        <!-- End Topbar -->


        <!-- Sidebar -->
            @include('components-admin.sidebar')
        <!-- End Sidebar -->

        <!-- Konten Admin -->
           <div class="main-content">

            <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Team Perusahan</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Edit Data Team Perusahaan</h4>
                                        <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                        <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Nama Team</label>
                                                <div class="col-lg-10">
                                                    <input name="nama" value="{{ $team->nama }}" id="projectname" type="text" class="form-control" placeholder="Masukan Nama">
                                                </div>
                                        </div>
                                        <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Posisi</label>
                                                <div class="col-lg-10">
                                                    <input name="posisi" value="{{ $team->posisi }}" id="projectname" type="text" class="form-control" placeholder="Masukan Posisi">
                                                </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="cover" class="col-form-label col-lg-2">Foto</label>
                                                <div class="col-lg-5">
                                                    <label for="cover" class="form-label">Upload Foto</label>
                                                    <input class="form-control" name="gambar" type="file" id="cover">
                                                    <span class="text-danger">Untuk Ukuran Foto : <strong>600 x 600 Pixels</strong> </span>
                                                </div>
                                                <div class="col-md-5 text-center">
                                                    <img class="rounded me-2" alt="200x200" src="/images/{{ $team->gambar }}" data-holder-rendered="true" width="200">
                                                </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-primary">Tambah Data Team</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>

            @include('components-admin.footer')
           </div>
        <!-- End Konten Admin -->

    </div>
    <!-- End Layout -->





    <!-- Vendor Script -->
        @include('master-admin.script')
    <!-- End Vendor Script -->
</body>
</html>