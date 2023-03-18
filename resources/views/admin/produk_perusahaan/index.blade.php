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
                                    <h4 class="mb-sm-0 font-size-18">Produk PT Multi Kara Digital</h4>
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
                                    <h4 class="card-title mb-2">List Produk</h4>
                                        <div class="d-flex flex-wrap mb-2">
                                            <a href="{{ route('produk.create') }}" type="button" class="btn btn-success waves-effect btn-label waves-light mb-2"><i class="bx bx-add-to-queue label-icon"></i>Tambah Produk</a>
                                        </div>
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle">No</th>
                                                    <th class="align-middle">Title Produk</th>
                                                    <th class="align-middle">Link Website Produk</th>
                                                    <th class="align-middle">Icon Gambar</th>
                                                    <th class="align-middle">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no=1; @endphp
                                                @foreach ($produk as $produk)
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body fw-bold">1</a>{{ $no++ }} </td>
                                                    <td>{{ $produk->title }}</td>
                                                    <td>{{ $produk->link }}</td>
                                                    <td><img src="/images/{{ $produk->gambar }}" class="rounded me-2" data-holder-rendered="true" width="100"></td>
                                                    <td>
                                                        <form action="{{ route('produk.destroy',$produk->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('produk.edit', $produk->id) }}"><i class="bx bx-edit  label-icon"></i>Edit</a>
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