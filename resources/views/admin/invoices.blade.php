@extends('admin.base')

@section('title', 'Commande')

@section('content')


<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container-xxl">

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
                                                <td>{{ $commande->created_at->format('M') }},{{ $commande->created_at->format('d Y') }}</td>
                                                <td>{{ $commande->total }}</td>
                                                <td> <span class="{{ ($commande->payement_status === 'Paid') ? 'badge bg-success-subtle text-success  px-2 py-1 fs-13' : 'badge bg-light text-dark  px-2 py-1 fs-13' }}"">{{ $commande->payment_status }}</span></td>
                                                <td>{{ $commande->paniers->sum(fn($p) => $p->quantite) }}</td>
                                                <td> {{ $commande->email }}</td>
                                                <td> <span class="badge border border-secondary text-secondary  px-2 py-1 fs-13">{{ $commande->order_status }}</span></td>
                                                <td>
                                                     <div class="d-flex gap-2">
                                                          <a href="{{ route('admin.commande.show',$commande) }}" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                          <a href="{{ route('admin.commande.show',$commande) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
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
                    <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                        href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
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

