@extends('panier-base')

@section('title', 'Page Not Found')

@section('content')

    <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__layer"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title bw-split-in-left">404 Error</h2><!-- /.page-title -->
            <ul class="ienet-breadcrumb list-unstyled">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><span>404 Error</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="error-404">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="error-404__image">
                        <img src="{{ asset('assets/images/shapes/404.png') }}" alt="404">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                    <div class="error-404__content">
                        <h2 class="error-404__title">404</h2><!-- /.error-404__title -->
                        <h3 class="error-404__sub-title">Page Not Found</h3><!-- /.error-404__title -->
                        <p class="error-404__text">
                            The page you're looking for doesn't exist, has been moved, or is temporarily unavailable.
                            But don't worry! You can: Go back to the Homepage.
                        </p><!-- /.error-404__text -->
                        <a href="{{ route('welcome') }}" class="ienet-btn"><span>Back To Home</span></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.error-404 -->


@endsection
