@extends('admin.base')

@section('title', 'videos')

@section('content')


    <!-- ==================================================== -->
    <!-- Start right Content here -->
    <!-- ==================================================== -->
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-xxl">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center gap-1">
                            <h4 class="card-title flex-grow-1">All Videos List @session('success')
                                    | {{ session('success') }}
                                @endsession</h4>
                            <a href="{{ route('admin.video.create') }}" class="btn btn-sm btn-primary">
                                Add Video
                            </a>

                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1"></label>
                                                </div>
                                            </th>
                                            <th>Videos</th>
                                            <th>Link</th>
                                            <th>Star</th>
                                            <th>Durations</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($movies as $movie)
                                            @php
                                                $imagevideo = $movie->getPhoto();
                                                if ($imagevideo !== null) {
                                                    $picture = $movie->getPhoto()->getImageUrl(150, 150);
                                                } else {
                                                    $picture = asset('admin/assets/images/small/img-9.jpg');
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div
                                                            class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{ $picture }}" alt="" class="avatar-md">
                                                        </div>
                                                        <p class="text-dark fw-medium fs-15 mb-0">{{ $movie->name }}</p>
                                                    </div>

                                                </td>
                                                <td>{{ $movie->link }}</td>
                                                <td>{{ $movie->star }}</td>
                                                <td>{{ $movie->formattedtime() }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">

                                                        <a href="{{ route('admin.video.edit', ['movie' => $movie]) }}"
                                                            class="btn btn-light btn-sm"><iconify-icon
                                                                icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                        <a href="{{ route('admin.video.edit', ['movie' => $movie]) }}"
                                                            class="btn btn-soft-primary btn-sm"><iconify-icon
                                                                icon="solar:pen-2-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                        <form
                                                            action="{{ route('admin.video.delete', ['movie' => $movie]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="btn btn-soft-danger btn-sm"
                                                                onclick="event.preventDefault();
                                                                this.closest('form').submit();"><iconify-icon
                                                                icon="solar:trash-bin-minimalistic-2-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>

                        <div class="card-footer border-top">
                            <div class="row g-3">
                                {{ $movies->links('pagination.default') }}
                            </div>
                        </div>
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
                        </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone"
                            class="fs-18 align-middle text-danger"></iconify-icon> <a href="https://1.envato.market/techzaa"
                            class="fw-bold footer-text" target="_blank">Techzaa</a>
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
