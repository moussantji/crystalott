@extends('admin.base')

@section('title', '')

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
                            <h4 class="card-title flex-grow-1">All Coupons List @session('success')
                                    | {{ session('success') }}
                                @endsession</h4>
                            <a href="{{ route('coupons.create') }}" class="btn btn-sm btn-primary">
                                Add Coupon
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
                                            <th>Code</th>
                                            <th>discount</th>
                                            <th>type</th>
                                            <th>expires_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupons as $coupon)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2"></label>
                                                    </div>
                                                </td>
                                                <td>

                                                    <div class="d-flex align-items-center gap-2">
                                                        <p class="text-dark fw-medium fs-15 mb-0">{{ $coupon->code }}</p>
                                                    </div>

                                                </td>
                                                <td>{{ $coupon->discount }} {{ $coupon->type === 'percentage' ? '%' : '€' }}
                                                </td>
                                                <td>{{ ucfirst($coupon->type) }}</td>
                                                <td>{{ $coupon->expires_at ? \Carbon\Carbon::parse($coupon->expires_at)->format('d F, Y') : 'Aucune date d\'expiration' }}
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">

                                                        <a href="{{ route('coupons.edit', $coupon) }}"
                                                            class="btn btn-light btn-sm"><iconify-icon
                                                                icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                        <a href="{{ route('coupons.edit', $coupon) }}"
                                                            class="btn btn-soft-primary btn-sm"><iconify-icon
                                                                icon="solar:pen-2-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                        <form action="{{ route('coupons.destroy', $coupon) }}"
                                                            method="POST" style="display:inline;">
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

                            <div class="card-footer border-top">
                                <div class="row g-3">
                                    {{ $coupons->links('pagination.default') }}
                                </div>
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
