@extends('admin.base')

@section('title', 'Commande detail')

@section('content')

    <div class="page-content">

        <!-- Start Container -->
        <div class="container-xxl">

            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                        <div>
                                            <h4 class="fw-medium text-dark d-flex align-items-center gap-2">
                                                {{ $commande->id }} <span
                                                    class="{{ $commande->payement_status === 'Paid' ? 'badge bg-success-subtle text-success  px-2 py-1 fs-13' : 'badge bg-light text-dark  px-2 py-1 fs-13' }}">{{ $commande->payment_status }}</span><span
                                                    class="border border-warning text-warning fs-13 px-2 py-1 rounded">{{ $commande->order_status }}</span>
                                            </h4>
                                            <p class="mb-0">Order / Order Details / {{ $commande->id }} -
                                                {{ $commande->created_at->format('M') }},
                                                {{ $commande->created_at->format('d') }} ,
                                                {{ $commande->created_at->format('Y') }} at
                                                {{ $commande->created_at->format('h:i') }} </p>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <h4 class="fw-medium text-dark">Progress</h4>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
                                        @if ($commande->payment_status === 'Unpaid')
                                            <div class="col">
                                                <div class="progress mt-3" style="height: 10px;">
                                                    <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-warning"
                                                        role="progressbar" style="width: 60%" aria-valuenow="70"
                                                        aria-valuemin="0" aria-valuemax="70">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 mt-2">
                                                    <p class="mb-0">Processing</p>
                                                    <div class="spinner-border spinner-border-sm text-warning"
                                                        role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col">
                                                <div class="progress mt-3" style="height: 10px;">
                                                    <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success"
                                                        role="progressbar" style="width: 100%" aria-valuenow="70"
                                                        aria-valuemin="0" aria-valuemax="70">
                                                    </div>
                                                </div>
                                                <p class="mb-0 mt-2">Order Confirming</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                @if ($commande->payment_status === 'Unpaid')
                                    <div
                                        class="card-footer d-flex flex-wrap align-items-center justify-content-between bg-light-subtle gap-2">
                                        <p class="border rounded mb-0 px-2 py-1 bg-body"><i
                                                class='bx bx-arrow-from-left align-middle fs-16'></i> Estimated shipping
                                            date :
                                            <span class="text-dark fw-medium">{{ $commande->created_at->format('M') }},
                                                {{ $commande->created_at->format('d') }} ,
                                                {{ $commande->created_at->format('Y') }}</span>
                                        </p>
                                        <div>
                                            <a type="button" onclick="document.getElementById('myform').submit()"
                                                class="btn btn-primary">Mark as Paid</a>
                                        </div>
                                    </div>
                                @else
                                    <div
                                        class="card-footer d-flex flex-wrap align-items-center justify-content-between bg-light-subtle gap-2">
                                        <p class="border rounded mb-0 px-2 py-1 bg-body"><i
                                                class='bx bx-arrow-from-left align-middle fs-16'></i> Estimated shipping
                                            date :
                                            <span class="text-dark fw-medium">{{ $commande->created_at->format('M') }},
                                                {{ $commande->created_at->format('d') }} ,
                                                {{ $commande->created_at->format('Y') }}</span>
                                        </p>
                                    </div>
                                @endif
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0 table-hover table-centered">
                                            <thead class="bg-light-subtle border-bottom">
                                                <tr>
                                                    <th>Product Name & description</th>
                                                    <th>Status</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($commande->paniers as $panier)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <div
                                                                    class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                    <img src="{{ asset('assets/images/product/p-1.png') }}"
                                                                        alt="" class="avatar-md">
                                                                </div>
                                                                <div>
                                                                    <a href="#!"
                                                                        class="text-dark fw-medium fs-15">{{ $panier->abonnement->nom }}</a>
                                                                    <p class="text-muted mb-0 mt-1 fs-13"><span>Description
                                                                            : </span>{{ $panier->abonnement->description }}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td>
                                                            <span
                                                                class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Ready</span>
                                                        </td>
                                                        <td> {{ $panier->quantite }}</td>
                                                        <td>${{ $panier->abonnement->prix }}</td>
                                                        <td>
                                                            ${{ $panier->abonnement->prix * $panier->quantite }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @if ($commande->payment_status === 'Unpaid')
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Order Account</h4>
                                </div>
                                @include('profile.partials.order-form')
                            </div>
                            @endif
                            <div class="card bg-light-subtle">
                                <div class="card-body">
                                    <div class="row g-3 g-lg-0">
                                        <div class="col-lg-3 border-end">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                <div>
                                                    <p class="text-dark fw-medium fs-16 mb-1">Vender</p>
                                                    <p class="mb-0">Admin</p>
                                                </div>
                                                <div
                                                    class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                    <iconify-icon icon="solar:shop-2-bold-duotone"
                                                        class="fs-35 text-primary"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border-end">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                <div>
                                                    <p class="text-dark fw-medium fs-16 mb-1">Date</p>
                                                    <p class="mb-0">{{ $commande->created_at->format('M d, Y') }}</p>
                                                </div>
                                                <div
                                                    class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                    <iconify-icon icon="solar:calendar-date-bold-duotone"
                                                        class="fs-35 text-primary"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 border-end">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                <div>
                                                    <p class="text-dark fw-medium fs-16 mb-1">Paid By</p>
                                                    <p class="mb-0">{{ $commande->nom }}</p>
                                                </div>
                                                <div
                                                    class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                    <iconify-icon icon="solar:user-circle-bold-duotone"
                                                        class="fs-35 text-primary"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                <div>
                                                    <p class="text-dark fw-medium fs-16 mb-1">Reference
                                                        #{{ $commande->id }}</p>
                                                    <p class="mb-0">#{{ $commande->id }}/{{ $commande->count() }}</p>
                                                </div>
                                                <div
                                                    class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                    <iconify-icon icon="solar:clipboard-text-bold-duotone"
                                                        class="fs-35 text-primary"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order Summary</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon
                                                        icon="solar:clipboard-text-broken"></iconify-icon> Sub Total : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">
                                                ${{ $commande->paniers->sum(fn($p) => $p->abonnement->prix * $p->quantite) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon
                                                        icon="solar:ticket-broken" class="align-middle"></iconify-icon>
                                                    Discount : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">-$00.00</td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon
                                                        icon="solar:kick-scooter-broken"
                                                        class="align-middle"></iconify-icon> Delivery Charge : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">$00.00</td>
                                        </tr>
                                        <tr>
                                            <td class="px-0">
                                                <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon
                                                        icon="solar:calculator-minimalistic-broken"
                                                        class="align-middle"></iconify-icon> Estimated Tax (15.5%) : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">$00.00</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between bg-light-subtle">
                            <div>
                                <p class="fw-medium text-dark mb-0">Total Amount</p>
                            </div>
                            <div>
                                <p class="fw-medium text-dark mb-0">
                                    ${{ $commande->paniers->sum(fn($p) => $p->abonnement->prix * $p->quantite) }}.00</p>
                            </div>

                        </div>
                    </div>
                    @if ($commande->payment_method === 'paypal')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payment Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div
                                        class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/card/paypal.svg') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                    <div>
                                        <p class="mb-1 text-dark fw-medium">Paypal</p>
                                        <p class="mb-0 text-dark">moussanntjidiallo@gmail.com</p>
                                    </div>
                                    <div class="ms-auto">
                                        <iconify-icon icon="solar:check-circle-broken"
                                            class="fs-22 text-success"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($commande->payment_method === 'visa' || $commande->payment_method === 'mastercard')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payment Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <div
                                        class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('assets/images/card/visa.svg') }}" alt=""
                                            class="avatar-sm">
                                    </div>
                                    <div>
                                        <p class="mb-1 text-dark fw-medium">Visa</p>
                                        <p class="mb-0 text-dark">xxxx xxxx xxxx 7987</p>
                                    </div>
                                    <div class="ms-auto">
                                        <iconify-icon icon="solar:check-circle-broken"
                                            class="fs-22 text-success"></iconify-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($commande->payment_method === 'usdt')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payment Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/card/tether.svg') }}" alt=""
                                        class="avatar-sm">
                                </div>
                                <div>
                                    <p class="mb-1 text-dark fw-medium">Thether Usdt</p>
                                    <p class="mb-0 text-dark"></p>
                                </div>
                                <div class="ms-auto">
                                    <iconify-icon icon="solar:check-circle-broken"
                                        class="fs-22 text-success"></iconify-icon>
                                </div>
                            </div>

                        </div>
                    </div>
                    @else
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payment Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('assets/images/card/binance.svg') }}" alt=""
                                        class="avatar-sm">
                                </div>
                                <div>
                                    <p class="mb-1 text-dark fw-medium">Binance ID</p>
                                    <p class="mb-0 text-dark">485 315 04</p>
                                </div>
                                <div class="ms-auto">
                                    <iconify-icon icon="solar:check-circle-broken"
                                        class="fs-22 text-success"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Customer Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <p class="mb-1">{{ $commande->nom }}</p>
                                    <a href="#!" class="link-primary fw-medium">{{ $commande->email }}</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <h5 class="">Contact Number</h5>
                            </div>
                            <p class="mb-1">(+223) {{ $commande->tel }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End Container Fluid -->
@endsection
