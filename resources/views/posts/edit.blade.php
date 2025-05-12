@extends('admin.base')

@section('title', '')

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
                            Post</h4>
                    </div>
                    @include('profile.partials.post-edit')
                </div>

            </div>
            @if($post->BlogImage->isNotEmpty())

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-1 anchor" id="with-controls">
                            Post images <a class="anchor-link" href="#with-controls">#</a>
                        </h5>
                        <div class="w-50 mb-3 mx-auto">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($post->BlogImage as $k => $blogimage)
                                    <div class="carousel-item {{ ($k === 0) ? 'active'  : '' }}">
                                        <img src="{{ $blogimage->getImageUrl(900, 600) }}" class="d-block w-100" alt="img-4">
                                        <form id="imagedelete" action="{{ route('admin.blog.destroy',$blogimage) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        <a type="button" onclick="document.getElementById('imagedelete').submit()" class="btn btn-danger position-absolute bottom-0 w-100 start-0">
                                            Supprimer
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
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
