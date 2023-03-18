<!DOCTYPE html>
<html lang="en">
<head>
    @include('master-admin.meta')
    @include('master-admin.css')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
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
                                    <h4 class="mb-sm-0 font-size-18">Layanan Perusahan </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                @if ( $errors->any() )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ( $errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <h4 class="card-title mb-4">Tambah Artikel</h4>
                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="title" class="col-form-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Nama judul..." >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-form-label col-lg-2">Deskripsi</label>
                            <div class="col-lg-10">
                                <textarea id="editor" name="deskripsi" type="text"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="gambar" class="col-form-label col-lg-2">Gambar</label>
                            <div class="col-lg-5">
                                <label for="gambar" class="form-label">Upload gambar baru</label>
                                <input class="form-control" type="file" name="gambar" id="gambar">
                            </div>
                            <div class="col-md-5 text-center">
                            <img class="rounded me-2" id="gambar-view" alt="200x200" src="/assets/images/preview.png" data-holder-rendered="true" width="200">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Update data</button>
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



<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            image: {
                toolbar: [ 'toggleImageCaption', 'imageTextAlternative' ]
            },
            ckfinder: {
                    uploadUrl: "{{route('blog.upload', ['_token' => csrf_token() ])}}",
        }
        } )
        .catch( error => {
            console.error( error );
        } );
        

        const imageConfiguration = {
    resizeOptions: [
        {
            name: 'resizeImage:original',
            value: null,
            icon: 'original'
        },
        {
            name: 'resizeImage:25',
            value: '25',
            icon: 'small'
        },
        {
            name: 'resizeImage:50',
            value: '50',
            icon: 'medium'
        },
        {
            name: 'resizeImage:75',
            value: '75',
            icon: 'large'
        }
    ],
    toolbar: [
        ...
        'resizeImage:25',
        'resizeImage:50',
        'resizeImage:75',
        'resizeImage:original',
    ]
}
</script>

<script type="text/javascript">
    $('#gambar').change(function(){

    let reader = new FileReader();

    reader.onload = (e) => {

      $('#gambar-view').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

   });
  </script>

    <!-- Vendor Script -->
        @include('master-admin.script')
    <!-- End Vendor Script -->
</body>
</html>