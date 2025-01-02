@extends('admin.base')

@section('title', 'Video create')

@section('content')

<!-- ==================================================== -->
<div class="page-content">


    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon
                                icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>Add
                            Video</h4>
                    </div>
                    @include('profile.partials.video-form')
                </div>

            </div>
        </div>

    </div>
    <!-- End Container Fluid -->

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Crystal panel. Crafted by <iconify-icon
                        icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                        href="https://github.com/moussantji" class="fw-bold footer-text" target="_blank">Pone</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->

</div>
<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->


@endsection




