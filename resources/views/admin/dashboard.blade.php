@extends('admin.base')

@section('title', 'Dashboard')

@section('content')


    <!-- ==================================================== -->
    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-fluid">

            <!-- Start here.... -->
            <div class="row">
                <div class="col-xxl-5">
                    <div class="row">
                        {{--                            <div class="col-12">
                                <div class="alert alert-primary text-truncate mb-3" role="alert">
                                    We regret to inform you that our server is currently experiencing technical
                                    difficulties.
                                </div>
                            </div>  --}}

                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <iconify-icon icon="solar:cart-5-bold-duotone"
                                                    class="avatar-title fs-32 text-primary"></iconify-icon>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ number_format($totalorders, 0, '', ',') }}
                                            </h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">New Posts</p>
                                            <h3 class="text-dark mt-1 mb-0">{{ number_format($totalpost, 0, '', ',') }}</h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Paid Order</p>
                                            <h3 class="text-dark mt-1 mb-0">
                                                {{ number_format($totalpaidorders, 0, '', ',') }}</h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                        <div class="col-md-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-soft-primary rounded">
                                                <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-6 text-end">
                                            <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                            <h3 class="text-dark mt-1 mb-0">${{ number_format($totalamount, 0, '', ',') }}
                                            </h3>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card body -->
                                <div class="card-footer py-2 bg-light bg-opacity-50">
                                    <div class="d-flex align-items-center justify-content-between">
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div> <!-- end col -->

                <div class="col-xxl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Performance</h4>
                            </div> <!-- end card-title-->

                            <div dir="ltr">
                                <div id="dash-performance-chart" class="apex-charts"></div>
                            </div>
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Conversions</h5>
                            <div id="conversions" class="apex-charts mb-2 mt-n2"></div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p class="text-muted mb-2">Paid Order</p>
                                    <h3 class="text-dark mb-3">{{ $totalpaidorders }}</h3>
                                </div> <!-- end col -->
                                <div class="col-6">
                                    <p class="text-muted mb-2">Total Order</p>
                                    <h3 class="text-dark mb-3">{{ $totalorders }}</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="text-center">
                                <a type="button" href="{{ route('admin.commande') }}"
                                    class="btn btn-light shadow-none w-100">View
                                    Details</a>
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div> <!-- end left chart card -->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sessions by Country</h5>
                            <div id="world-map-markers" style="height: 316px">
                            </div>
                            <div class="row text-center">
                                <div class="col-6">
                                    <p class="text-muted mb-2">Paid Order</p>
                                    <h3 class="text-dark mb-3">{{ $totalpaidorders }}</h3>
                                </div> <!-- end col -->
                                <div class="col-6">
                                    <p class="text-muted mb-2">Total Order</p>
                                    <h3 class="text-dark mb-3">{{ $totalorders }}</h3>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

                <div class="col-lg-4">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center justify-content-between gap-2">
                            <h4 class="card-title flex-grow-1">Top Pages</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap table-centered m-0">
                                <thead class="bg-light bg-opacity-50">
                                    <tr>
                                        <th class="text-muted ps-3">Page Path</th>
                                        <th class="text-muted">Page Views</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($analytics as $analytic)
                                        <tr>
                                            <td class="ps-3"><a href="{{ route($analytic->page) }}"
                                                    class="text-muted">{{ route($analytic->page) }}</a></td>
                                            <td>{{ $analytic->page_views }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-top">
                            <div class="row g-3">
                                {{ $analytics->links('pagination.analytics') }}
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">
                                    Recent Orders
                                </h4>
                            </div>
                        </div>
                        <!-- end card body -->
                        <div class="table-responsive table-centered">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Created at</th>
                                        <th>Total</th>
                                        <th>Payment Status</th>
                                        <th>Items</th>
                                        <th>Delivery Email</th>
                                        <th>Order Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($commandes as $commande)
                                        <tr>
                                            <td>
                                                {{ $commande->id }}
                                            </td>
                                            <td>{{ $commande->created_at->format('M') }},{{ $commande->created_at->format('d Y') }}
                                            </td>
                                            <td>{{ $commande->total }}</td>
                                            <td> <span
                                                    class="{{ $commande->payement_status === 'Paid' ? 'badge bg-success-subtle text-success  px-2 py-1 fs-13' : 'badge bg-light text-dark  px-2 py-1 fs-13' }}"">{{ $commande->payment_status }}</span>
                                            </td>
                                            <td>{{ $commande->paniers->sum(fn($p) => $p->quantite) }}</td>
                                            <td> {{ $commande->email }}</td>
                                            <td> <span
                                                    class="badge border border-secondary text-secondary  px-2 py-1 fs-13">{{ $commande->order_status }}</span>
                                            </td>
                                            <td>
                                                @if ($commande->payment_status === 'Unpaid')
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('admin.commande.show', $commande) }}"
                                                            class="btn btn-light btn-sm"><iconify-icon
                                                                icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                        <a href="{{ route('admin.commande.show', $commande) }}"
                                                            class="btn btn-soft-primary btn-sm"><iconify-icon
                                                                icon="solar:pen-2-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                    </div>
                                                @else
                                                    <div class="d-flex gap-2">
                                                        <a href="{{ route('admin.commande.show', $commande) }}"
                                                            class="btn btn-light btn-sm"><iconify-icon
                                                                icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon></a>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- table responsive -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div> <!-- end row -->

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
    <script>
        const pageviews = @json($pageviews);
        const pageclicks = @json($pageclicks);
        const percentagepaid = @json($percentagepaid);
        const country = @json($country);
        const lat = @json($lat * 1);
        const long = @json($long * 1);
        const monthlyviews = @json($monthlyviews);
    </script>


@endsection
