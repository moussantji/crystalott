@extends('admin.base')

@section('title', 'Commande')

@section('content')


    <div class="page-content">

        <!-- Start Container Fluid -->
        <div class="container-xxl">

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Payment Succes</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:chat-round-money-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Order Pending</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalunpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:cart-cross-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Order Shipped</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:box-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Order Delivering</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalunpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:tram-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Pending Review</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalunpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:clipboard-remove-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Pending Payment</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalunpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:clock-circle-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">Delivered</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:clipboard-check-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="card-title mb-2">In Progress</h4>
                                    <p class="text-muted fw-medium fs-22 mb-0">{{ $totalunpaidorders }}</p>
                                </div>
                                <div>
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:inbox-line-broken"
                                            class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="d-flex card-header justify-content-between align-items-center">
                            <div>
                                <h4 class="card-title">All Order List</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
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
                            <!-- end table-responsive -->
                        </div>
                        <div class="card-footer border-top">
                            <div class="row g-3">
                                {{ $commandes->links('pagination.default') }}
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
                            class="fs-18 align-middle text-danger"></iconify-icon> <a
                            href="https://1.envato.market/techzaa" class="fw-bold footer-text"
                            target="_blank">Techzaa</a>
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
