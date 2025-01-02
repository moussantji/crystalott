@extends('panier-base')

@section('title', 'Panier')

@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Cart</h2><!-- /.page-title -->
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><span>Cart</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <!-- Cart Start -->
    <section class="cart-page">
        <div class="container">
            <div class="table-responsive">

                <table class="table cart-page__table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form id="myform" method="post" action="{{ route('panier.update') }}">
                            @csrf
                            @foreach ($paniers as $panier)
                                <tr>
                                    <td>
                                        <div class="cart-page__table__meta">
                                            <div class="cart-page__table__meta-img">
                                                <img src="assets/images/products/cart-1-1.jpg" alt="ienet">
                                            </div>
                                            <h3 class="cart-page__table__meta-title"><a
                                                    href="product-details.html">{{ $panier->abonnement->nom }}</a>
                                            </h3>
                                        </div>
                                    </td>
                                    <td>${{ $panier->abonnement->prix }}</td>
                                    <td>

                                        <div class="product-details__quantity">
                                            <div class="quantity-box">
                                                <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                                <input type="text" min="1" class="quantity-input"
                                                    name="panier{{ $panier->id }}" value="{{ $panier->quantite }}"
                                                    data-prix="{{ $panier->abonnement->prix }}" id="{{ $panier->id }}">
                                                <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                            </div>

                                        </div>
                                    </td>
                                    <td>${{ $panier->abonnement->prix * $panier->quantite }}</td>
                                    <td>
                                        <a type="button" onclick="updateAndSubmitForm(this)" data-id="{{ $panier->id }}"
                                            class="delete-item table cart-page__table__remove">X</a>
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                        <form method="post" id="deleteform" action="">
                            @csrf
                            @method('delete')
                        </form>
                    </tbody>
                </table>
            </div>
            @if (!$paniers->isEmpty())

            <div class="cart-page__coupone">
                {{-- <form action="#" class="cart-page__coupone__form">
                    <label for="coupon">Coupon:</label>
                    <input type="text" placeholder="Enter Coupon Code" id="coupon" class="cart-cupon__input">
                    <button type="submit" class="ienet-btn"><span>Apply Code</span></button>
                </form> --}}

                <a type="button" onclick="document.getElementById('myform').submit();" class="ienet-btn update"><span>Update Cart</span></a>
            </div>

            @endif
            @if (!$paniers->isEmpty())
                <div class="cart-page__cart-total">
                    <h3 class="cart-page__cart-total__title">Subtotal</h3>
                    <ul class="cart-page__cart-total__list list-unstyled">
                        @foreach ($paniers as $panier)
                            <li><span>Subtotal</span><span
                                    class="cart-page__cart-total__list__amount">${{ $panier->abonnement->prix * $panier->quantite }}</span>
                            </li>
                            <li class="shipping">
                                <h4 class="cart-page__cart-total__text">{{ $panier->abonnement->nom }} X
                                    {{ $panier->quantite }}</h4>
                                <address class="cart-page__cart-total__address">{{ $panier->abonnement->description }}
                                </address>
                            </li>
                        @endforeach
                        <li><span>Total</span><span
                                class="cart-page__cart-total__list__amount">${{ $paniers->sum(fn($p) => $p->abonnement->prix * $p->quantite) }}</span>
                        </li>
                    </ul>
                    <div class="cart-page__cart-total__buttons">
                        <a href="{{ route('commandes.index') }}" class="ienet-btn"><span>checkout</span></a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Cart End -->

@endsection
