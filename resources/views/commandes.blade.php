@extends('panier-base')

@section('title', 'Checkout')

@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">Checkout</h2><!-- /.page-title -->
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><span>Checkout</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <!-- Checkout Start -->
    <section class="checkout-page">
        <div class="container">
            <form id="formcommande" method="post" action="{{ route('commander') }}">
                @csrf
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="checkout-page__billing-address">
                            <h2 class="checkout-page__billing-address__title">Billing details</h2>
                            <div class="row bs-gutter-x-30">
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <label for="name">Name *</label>
                                        <input type="text" id="name" name="nom" value="" placeholder=""
                                            required="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <label for="country">select country *</label>
                                        <select id="country-select" name="country" class="selectpicker"
                                            aria-label="Default select example">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <label for="phone">Phone *</label>
                                        <input id="phone" name="tel" type="tel"
                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <label for="email">email address *</label>
                                        <input id="email" name="email" type="email" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-page__payment">
                            <div class="checkout-page__payment__item checkout-page__payment__item--active">
                                <h3 class="checkout-page__payment__title">Payment Method</h3>
                                <div class="checkout-page__payment__content checkout-page__input-box"
                                    style="display: none;">
                                    <select name="payment_method" class="selectpicker" id="payment-method">
                                        <option value="">Select Payment method</option>
                                        <option value="binance">Binance Pay</option>
                                        <option value="paypal">Paypal</option>
                                        <option value="usdt">Crypto (USDT)</option>
                                        <option value="visa">Visa/Mastercard</option>
                                    </select>
                                </div><!-- /.checkout__payment__content -->
                            </div><!-- /.checkout__payment__item -->
                            <div class="checkout-page__payment__btn">
                                <a type="button"
                                    onclick="event.preventDefault(); document.getElementById('formcommande').submit();"
                                    class="ienet-btn">
                                    <span>Place your Order</span>
                                </a>
                            </div>
                        </div><!-- /.checkout__payment -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </form>
            <div class="checkout-page__your-order">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <h2 class="checkout-page__your-order__title">Your order</h2>
                        <table class="checkout-page__order-table">
                            <thead class="order_table_head">
                                <tr>
                                    <th>Product</th>
                                    <th class="right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paniers as $panier)
                                    <tr>
                                        <td class="pro__title">{{ $panier->abonnement->nom }} X {{ $panier->quantite }}
                                        </td>
                                        <td class="pro__price">${{ $panier->abonnement->prix * $panier->quantite }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="pro__title">Total</td>
                                    <td class="pro__price">
                                        ${{ $paniers->sum(fn($p) => $p->abonnement->prix * $p->quantite) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Checkout End -->

@endsection
