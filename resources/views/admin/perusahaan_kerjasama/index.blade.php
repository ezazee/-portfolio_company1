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
                                    <h4 class="mb-sm-0 font-size-18">Logo Perusahaan Yang Sudah Bekerja Sama</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                       @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                            {{ $message }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <h4 class="card-title mb-2">List Logo Perusahaan</h4>
                                        <div class="d-flex flex-wrap mb-2">
                                            <a href="{{ route('perusahaan.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Logo</a>
                                        </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle">No</th>
                                                    <th class="align-middle">Gambar</th>
                                                    <th class="align-middle">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no=1; @endphp
                                                @foreach ($perusahaan as $perusahaan)
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">{{ $no++ }}</a></td>
                                                    <td><img src="/images/{{ $perusahaan->gambar }}" class="rounded me-2" data-holder-rendered="true" width="100"></td>
                                                    <td>
                                                        <form action="{{ route('perusahaan.destroy',$perusahaan->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger waves-effect btn-label waves-light btn-sm show_confirm"><i class="bx bxs-trash   label-icon"></i>Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
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