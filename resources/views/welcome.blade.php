@extends('base')

@section('title', 'Welcome')

@section('content')


    <section class="main-slider-one" id="home">
        <div class="main-slider-one__carousel ienet-owl__carousel owl-carousel"
            data-owl-options='{
            "loop": true,
            "animateOut": "fadeOut",
            "animateIn": "fadeIn",
            "items": 1,
            "autoplay": true,
            "autoplayTimeout": 7000,
            "smartSpeed": 1000,
            "nav": false,
            "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
            "dots": true,
            "margin": 0
        }'>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('assets/images/backgrounds/slider-1-1.jpg') }});">
                    </div>
                    <div class="main-slider-one__content">
                        <h5 class="main-slider-one__sub-title"><span
                                class="main-slider-one__sub-title__border"></span>Connecting the World</h5>
                        <!-- slider-sub-title -->
                        <h2 class="main-slider-one__title">Your Gateway to the<br> Digital Universe</h2>
                        <!-- slider-title -->
                        <p class="main-slider-one__text">
                            Enjoy seamless streaming anytime, with channels and shows tailored for you.
                            <br>
                            Explore endless entertainment options, with smooth and reliable performance.
                        </p><!-- slider-tex -->
                        <div class="main-slider-one__btn">
                            <a href="https://wa.me/+16725384823" class="ienet-btn main-slider-one__btn__first"><span>our
                                    service<span class="ienet-btn__icon"><i
                                            class="fas fa-chevron-right"></i></span></span></a><!-- slider-btn -->
                            <a href="#packages" class="ienet-btn main-slider-one__btn__last"><span><span
                                        class="ienet-btn__icon ienet-btn__icon--left"><i
                                            class="fas fa-gem"></i></span>browse plan</span></a><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__image">
                        <div class="main-slider-one__image__one">
                            <img src="assets/images/backgrounds/slider-1-layer-2.jpg" alt="ienet">
                        </div>
                        <div class="main-slider-one__image__border">
                            <img src="assets/images/shapes/slider-1-border.png" alt="ienet">
                        </div>
                        <div class="main-slider-one__image__user">
                            <div class="main-slider-one__image__user__text">2.5M happy user</div>
                            <div class="main-slider-one__image__user__image">
                                <img src="assets/images/resources/user-1.png" alt="ienet">
                                <img src="assets/images/resources/user-2.png" alt="ienet">
                                <img src="assets/images/resources/user-3.png" alt="ienet">
                                <span class="main-slider-one__image__user__rm">+65</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-one__layer"
                        style="background-image: url(assets/images/backgrounds/slider-1-layer-1.png);"></div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                    <div class="main-slider-one__content">
                        <h5 class="main-slider-one__sub-title"><span
                                class="main-slider-one__sub-title__border"></span>Streaming Made Simple</h5>
                        <!-- slider-sub-title -->
                        <h2 class="main-slider-one__title">Endless Entertainment<br> at Your Fingertips</h2>
                        <!-- slider-title -->
                        <p class="main-slider-one__text">
                            Discover the ultimate IPTV experience, with high-quality content for everyone.<br>
                            Access a wide selection of channels, movies, and shows on any device.
                        </p><!-- slider-tex -->
                        <div class="main-slider-one__btn">
                            <a href="https://wa.me/+16725384823" class="ienet-btn main-slider-one__btn__first"><span>our
                                    service<span class="ienet-btn__icon"><i
                                            class="fas fa-chevron-right"></i></span></span></a><!-- slider-btn -->
                            <a href="#packages" class="ienet-btn main-slider-one__btn__last"><span><span
                                        class="ienet-btn__icon ienet-btn__icon--left"><i
                                            class="fas fa-gem"></i></span>browse plan</span></a><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__image">
                        <div class="main-slider-one__image__one">
                            <img src="assets/images/backgrounds/slider-1-layer-2.jpg" alt="ienet">
                        </div>
                        <div class="main-slider-one__image__border">
                            <img src="assets/images/shapes/slider-1-border.png" alt="ienet">
                        </div>
                        <div class="main-slider-one__image__user">
                            <div class="main-slider-one__image__user__text">2.5M happy user</div>
                            <div class="main-slider-one__image__user__image">
                                <img src="assets/images/resources/user-1.png" alt="ienet">
                                <img src="assets/images/resources/user-2.png" alt="ienet">
                                <img src="assets/images/resources/user-3.png" alt="ienet">
                                <span class="main-slider-one__image__user__rm">+65</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-one__layer"
                        style="background-image: url(assets/images/backgrounds/slider-1-layer-2.png);"></div>
                </div>
            </div>
            <div class="item">
                <div class="main-slider-one__item">
                    <div class="main-slider-one__bg"
                        style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                    <div class="main-slider-one__content">
                        <h5 class="main-slider-one__sub-title"><span
                                class="main-slider-one__sub-title__border"></span>Entertainment Unlimited</h5>
                        <!-- slider-sub-title -->
                        <h2 class="main-slider-one__title">The Future of Streaming<br> Anytime, Anywhere</h2>
                        <!-- slider-title -->
                        <p class="main-slider-one__text">
                            Stream your favorite movies and channels, anytime and anywhere you go.<br>
                            Enjoy smooth playback and reliable service tailored to your needs.
                        </p><!-- slider-tex -->
                        <div class="main-slider-one__btn">
                            <a href="https://wa.me/+16725384823" class="ienet-btn main-slider-one__btn__first"><span>our
                                    service<span class="ienet-btn__icon"><i
                                            class="fas fa-chevron-right"></i></span></span></a><!-- slider-btn -->
                            <a href="#packages" class="ienet-btn main-slider-one__btn__last"><span><span
                                        class="ienet-btn__icon ienet-btn__icon--left"><i
                                            class="fas fa-gem"></i></span>browse plan</span></a><!-- slider-btn -->
                        </div>
                    </div>
                    <div class="main-slider-one__image">
                        <div class="main-slider-one__image__one">
                            <img src="assets/images/backgrounds/slider-1-layer-2.jpg" alt="ienet">
                        </div>
                        <div class="main-slider-one__image__border">
                            <img src="assets/images/shapes/slider-1-border.png" alt="ienet">
                        </div>
                        <div class="main-slider-one__image__user">
                            <div class="main-slider-one__image__user__text">2.5M happy user</div>
                            <div class="main-slider-one__image__user__image">
                                <img src="assets/images/resources/user-1.png" alt="ienet">
                                <img src="assets/images/resources/user-2.png" alt="ienet">
                                <img src="assets/images/resources/user-3.png" alt="ienet">
                                <span class="main-slider-one__image__user__rm">+65</span>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider-one__layer"
                        style="background-image: url(assets/images/backgrounds/slider-1-layer-3.png);"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider-end -->

    <section class="about-one" style="background-image: url(assets/images/shapes/about-1-bg.png);" id="about">
        <div class="about-one__shape" style="background-image: url(assets/images/resources/about-shape-1.png);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__image wow fadeInLeft" data-wow-delay="300ms">
                        <div class="about-one__image__one">
                            <img src="assets/images/resources/about-1-1.jpg" alt="ienet">
                        </div>
                        <div class="about-one__image__bg"></div>
                        <div class="about-one__image__border"
                            style="background-image: url(assets/images/shapes/about-1-border.png);"></div>
                        <div class="about-one__image__two">
                            <div class="about-one__image__two__inner"><img src="assets/images/resources/about-1-2.jpg"
                                    alt="ienet"></div>
                        </div>
                    </div><!-- /.about-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="about-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>About Our Iptv<span
                                    class="sec-title__tagline__right-border"></span></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">We Provide <span>Unlimited</span> Iptv
                                For You.</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-one__content__text">
                            We provide high-quality streaming services, offering a wide range of channels and content for
                            every viewer. Our platform is designed for seamless access, ensuring a smooth and reliable
                            entertainment experience anytime, anywhere. With a focus on customer satisfaction, we are
                            committed to delivering an exceptional IPTV service tailored to your needs.
                        </p>
                        <ul class="about-one__content__list">
                            <li><span class="fas fa-check"></span>Ultra-Fast Streaming</li>
                            <li><span class="fas fa-check"></span>Blazing Fast Connection</li>
                            <li><span class="fas fa-check"></span>Lightning Speed</li>
                            <li><span class="fas fa-check"></span>Instant Streaming Experience</li>
                        </ul>
                        <a href="#packages" class="ienet-btn"><span>More About Us<span class="ienet-btn__icon"><i
                                        class="fas fa-chevron-right"></i></span></span></a>
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-one -->

    <section class="packages-one" id="packages">
        <div class="packages-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url(assets/images/backgrounds/price-bg-1.jpg);"></div>
        <!-- /.packages-one__bg -->
        <div class="container tabs-box">
            <ul class="packages-one__wrapper">

                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-home"></i></div>
                    <h3 class="packages-one__item__title">Home IPTV</h3>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>High-Quality Streams</li>
                        <li><span class="fas fa-check"></span>Unlimited Channel Access</li>
                        <li><span class="fas fa-check"></span>24×7 Support</li>
                        <li><span class="fas fa-check"></span>Seamless Device Compatibility</li>
                    </ul>
                </li><!-- item -->

                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-corporation"></i></div>
                    <h3 class="packages-one__item__title">Corporate IPTV</h3>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Reliable Business Solutions</li>
                        <li><span class="fas fa-check"></span>"Streamline Internal Communications</li>
                        <li><span class="fas fa-check"></span>Secure Content Delivery</li>
                        <li><span class="fas fa-check"></span>Customizable for Your Needs</li>
                    </ul>
                </li><!-- item -->
                <li class="packages-one__item">
                    <div class="packages-one__item__icon"><i class="icon-data-analytics"></i></div>
                    <h3 class="packages-one__item__title">Data Connectivity</h3>
                    <ul class="packages-one__item__list">
                        <li><span class="fas fa-check"></span>Fast, Reliable Connections</li>
                        <li><span class="fas fa-check"></span>Secure Data Transfer</li>
                        <li><span class="fas fa-check"></span>Seamless Network Integration</li>
                        <li><span class="fas fa-check"></span>Scalable for Growing Needs</li>
                    </ul>
                </li><!-- item -->
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span
                                class="sec-title__tagline__left-border"></span>Our Best Plan<span
                                class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">Select Your <span>Best Plan</span></h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div>
            </div>
            <ul class="packages-one__list tab-buttons list-unstyled">
                <li data-tab="#10mbps" class="tab-btn">Basic Plan</li>
            </ul>
            <div class="tabs-content">
                <div class="tab fadeInUp animated active-tab" id="10mbps">
                    <div class="row gutter-y-30">
                        @foreach ($abonnements as $abonnement)
                            <div class="col-lg-4 col-md-6">
                                <div class="packages-one__card">
                                    <div class="packages-one__card__price">${{ $abonnement->prix }} / <span>month</span>
                                    </div>
                                    <h3 class="packages-one__card__title">{{ $abonnement->nom }}</h3>
                                    <ul class="packages-one__card__list">
                                        <li><span class="fas fa-check"></span>24hr Unlimited</li>
                                        <li><span class="fas fa-check"></span>Talk Time N/A</li>
                                        <li><span class="fas fa-check"></span>Fiber Optics</li>
                                        <li><span class="fas fa-check"></span>OTC-Free</li>
                                    </ul>
                                    <form action="{{ route('panier.ajouter') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="abonnement_id" value="{{ $abonnement->id }}">
                                        <input type="hidden" name="quantite" value="1">

                                        <a type="button" class="packages-one__card__rm"
                                            onclick="event.preventDefault();
                        this.closest('form').submit();"><i
                                                class="icon-right-chevron"></i></a>
                                    </form>
                                    <div class="packages-one__card__image">
                                        <img src="assets/images/resources/package-1-1.jpg" alt="ienet">
                                    </div>
                                </div>
                            </div><!-- item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Start -->
    <section class="feature-one">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-border"></span>Our
                    facility<span class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Our Special <span>Features</span></h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-dashboard"></i></div>
                        <h5 class="feature-one__box__title">Ultra-Stable IPTV</h5>
                        <p class="feature-one__box__text">
                            Stream seamlessly, with reliable, uninterrupted connections.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-tv"></i></div>
                        <h5 class="feature-one__box__title">16000+ TV chanels</h5>
                        <p class="feature-one__box__text">
                            Access 16,000+ channels,<br> with endless entertainment at hand.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-planning"></i></div>
                        <h5 class="feature-one__box__title">Flexible Plans</h5>
                        <p class="feature-one__box__text">
                            Choose from a variety of plans,<br> tailored to fit your needs and budget.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="feature-one__image">
                        <div class="feature-one__image__one">
                            <img src="assets/images/resources/feature-1-1.jpg" alt="ienet">
                        </div>
                        <div class="feature-one__image__border">
                            <img src="assets/images/shapes/feature-shape-1.png" alt="ienet">
                        </div>
                        <div class="feature-one__image__router">
                            <img src="assets/images/resources/feature-1-router.png" alt="ienet">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay="00ms">
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-wifi-router"></i></div>
                        <h5 class="feature-one__box__title">100% free installation</h5>
                        <p class="feature-one__box__text">
                            Enjoy hassle-free setup,<br> with no installation costs whatsoever.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-support"></i></div>
                        <h5 class="feature-one__box__title">fast support 24/7</h5>
                        <p class="feature-one__box__text">
                            Get instant help anytime,<br> with our 24/7 dedicated support team.
                        </p>
                    </div>
                    <div class="feature-one__box">
                        <div class="feature-one__box__icon"><i class="icon-4k"></i></div>
                        <h5 class="feature-one__box__title">4K And 8K quality</h5>
                        <p class="feature-one__box__text">
                            Enjoy stunning visuals,<br> with crystal-clear 4K and 8K quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature End -->

    <section class="mail-one">
        <div class="mail-one__bg" style="background-image: url(assets/images/backgrounds/mail-bg-1.jpg);"></div>
        <!-- /.movie-one__bg -->
        <div class="mail-one__shape-left" style="background-image: url(assets/images/resources/mail-shape-1.png);"></div>
        <div class="mail-one__shape-right" style="background-image: url(assets/images/resources/mail-shape-2.png);"></div>
        <div class="container">
            <div class="mail-one__content">
                <div class="sec-title text-left">

                    <h6 class="sec-title__tagline bw-split-in-right"><span
                            class="sec-title__tagline__left-border"></span>newsletters<span
                            class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">Subscribe to <span>the Newsletters</span></h3>
                    <!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <form method="post" action="{{ route('newsletter.subscribe') }}" data-url="MAILCHIMP_FORM_URL"
                    class="mail-one__newsletter mc-form" id="myform">
                    @csrf
                    <input type="text" name="email" placeholder="Enter Your Email">
                    <span class="mail-one__newsletter__icon"><i class="icon-mail"></i></span>
                    <button type="button" onclick="event.preventDefault();
                        this.closest('form').submit();" class="ienet-btn"><span>Subscribe</span></button>
                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                </form><!-- /.footer-widget__newsletter mc-form -->
            </div>
        </div>
    </section>

    <section class="cta-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cta-one__image wow fadeInLeft" data-wow-delay="100ms">
                        <div class="cta-one__image__one">
                            <img src="assets/images/resources/cta-1-1.jpg" alt="ienet">
                        </div>
                        <div class="cta-one__image__shape">
                            <img src="assets/images/shapes/cta-shape-1.png" alt="ienet">
                        </div>
                        <div class="cta-one__image__two wow fadeInUp" data-wow-delay="300ms">
                            <img src="assets/images/resources/cta-1-1.png" alt="ienet">
                        </div>
                        <div class="cta-one__image__price wow fadeInUp" data-wow-delay="200ms">
                            Start Form $08 / <span>Month</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="cta-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>save your money<span
                                    class="sec-title__tagline__right-border"></span></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Save Money With Your <span>IPTV</span>
                                Service </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="cta-one__content__text">
                            Save on expensive cable bills, enjoy a wide range of content and channels at an affordable
                            price. With our IPTV service, you get the best value for high-quality streaming, all without the
                            need for traditional TV subscriptions.
                        </p>
                        <a href="https://wa.me/+16725384823" class="ienet-btn"><span>Get In Touch<span
                                    class="ienet-btn__icon"><i class="fas fa-chevron-right"></i></span></span></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.cta-one -->

    <section class="movie-one" id="movie">
        <div class="movie-one__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%"
            style="background-image: url(assets/images/backgrounds/movie-bg-1.jpg);"></div>
        <!-- /.movie-one__bg -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline bw-split-in-right"><span
                                class="sec-title__tagline__left-border"></span>entertainment<span
                                class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">Popular <span>Featured</span> Show</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                </div>
                <div class="col-md-4">
                    <div class="movie-one__nav">
                        <a href="#" class="movie-one__nav__prev"><i class="icon-left-chevron"></i></a>
                        <a href="#" class="movie-one__nav__next"><i class="icon-right-chevron"></i></a>
                    </div><!-- /.testimonials-one__custome-navs -->
                </div>
            </div>
        </div>
        <div class="movie-one__carousel owl-carousel ienet-owl__carousel--custom-nav owl-theme ienet-owl__carousel"
            data-owl-nav-prev=".movie-one__nav__prev" data-owl-nav-next=".movie-one__nav__next"
            data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "center": false,
            "nav": false,
            "dots": true,
            "smartSpeed": 500,
            "autoplayTimeout": 10000,
            "responsive": {
                "0": {
                    "stagePadding": 50,
                    "items": 1
                },
                "500": {
                    "items": 2
                },
                "768": {
                    "stagePadding": 100,
                    "items": 2
                },
                "992": {
                    "stagePadding": 52,
                    "items": 3
                },
                "1200": {
                    "stagePadding": 160,
                    "items": 3
                },
                "1300": {
                    "stagePadding": 100,
                    "items": 4
                },
                "1400": {
                    "stagePadding": 116,
                    "items": 4
                },
                "1600": {
                    "stagePadding": 216,
                    "items": 4
                },
                "1800": {
                    "stagePadding": 216,
                    "items": 5
                }
            }
        }'>
            @foreach ($movies as $movie)
                <div class="item">
                    <div class="movie-one__item">
                        <div class="movie-one__item__image">
                            <img src="{{ $movie->getPhoto()->getImageUrl(270, 335) }}" alt="ienet">
                        </div>
                        <a href="{{ $movie->link }}" class="video-popup">
                            <i class="fa fa-play"></i>
                            <i class="ripple"></i>
                        </a>
                        <div class="movie-one__item__content">
                            <h3 class="movie-one__item__title">{{ $movie->name }}</h3>
                            <ul class="movie-one__item__list">
                                <li><i class="fa fa-star"></i>{{ $movie->star }}(Imdb)</li>
                                <li>{{ $movie->formattedtime() }}</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- item -->
            @endforeach

        </div>
    </section>

    <section class="faq-one">
        <div class="faq-one__shape" style="background-image: url(assets/images/resources/faq-shape-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-one__accordion ienet-accrodion" data-grp-name="ienet-accrodion">
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    What is Crystal IPTV?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Crystal IPTV offers high-definition streaming with a vast array of channels. It
                                        provides an exceptional viewing experience, bringing entertainment directly to your
                                        device, ensuring top-quality content and reliable service for every user.
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    How does broadband internet work?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Crystal IPTV works by delivering live TV and on-demand content over the internet. It
                                        uses advanced streaming technology to provide high-quality video, giving users
                                        access to a wide range of channels and shows, all in real-time.
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    What are the benefits of using Crystal IPTV?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Crystal IPTV offers a variety of benefits, including access to thousands of
                                        channels, high-definition quality, and the ability to stream on multiple devices. It
                                        ensures flexibility and cost-effective entertainment without the need for
                                        traditional cable subscriptions.
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>
                                    <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    Is Crystal IPTV legal and safe?
                                </h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>
                                        Yes, Crystal IPTV is a legal and safe service that complies with broadcasting laws.
                                        It ensures secure streaming with no risks, offering a reliable and trustworthy
                                        experience for users looking for quality entertainment.
                                    </p>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="faq-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>frequently asked questions<span
                                    class="sec-title__tagline__right-border"></span></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">Why Should <span>Work</span> With Us
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <!-- section-title -->
                        <div class="faq-one__content__box">
                            <div class="faq-one__content__box__icon"><i class="icon-wifi-router"></i></div>
                            <h5 class="faq-one__content__box__title">100% free installation</h5>
                            <p class="faq-one__content__box__text">
                                Enjoy free setup. No hidden fees, no extra costs, just a seamless installation process.
                            </p>
                        </div>
                        <div class="faq-one__video"
                            style="background-image: url(assets/images/resources/faq-1-video.jpg);">
                            <a href="https://www.youtube.com/watch?v=MI1nxoQ-rM0" class="video-popup">
                                <i class="fa fa-play"></i>
                                <i class="ripple"></i>
                            </a>
                        </div>
                    </div><!-- /.faq-one__contact -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.faq-one-accordion -->

    <section class="testimonials-one" id="testimonial">
        <div class="testimonials-one__bg" style="background-image: url(assets/images/shapes/testimonial-bg-1.png);"></div>
        <div class="testimonials-one__left-color"></div>
        <div class="testimonials-one__image"
            style="background-image: url(assets/images/resources/testimonial-image-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="testimonials-one__content">
                        <div class="sec-title text-left">

                            <h6 class="sec-title__tagline bw-split-in-right"><span
                                    class="sec-title__tagline__left-border"></span>our testimonials<span
                                    class="sec-title__tagline__right-border"></span></h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">What Peoples <span>Talked</span> About
                                Us</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="testimonials-one__content__text">
                            Our users rave about the seamless streaming experience we provide. With access to a wide range
                            of channels and excellent customer support, they appreciate the high-quality service that keeps
                            them coming back for more.
                        </p>
                        <div class="testimonials-one__nav">
                            <a href="#" class="testimonials-one__nav__prev"><i class="icon-left-chevron"></i></a>
                            <a href="#" class="testimonials-one__nav__next"><i class="icon-right-chevron"></i></a>
                        </div><!-- /.testimonials-one__custome-navs -->
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ienet-stretch-element-inside-column">
                        <div class="testimonials-one__carousel ienet-owl__carousel ienet-owl__carousel--custom-nav owl-theme owl-carousel"
                            data-owl-nav-prev=".testimonials-one__nav__prev"
                            data-owl-nav-next=".testimonials-one__nav__next"
                            data-owl-options='{
                                "items": 1,
                                "margin": 30,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": false,
                                "stagePadding": 0,
                                "nav":false,
                                "dots":false,
                                "responsive":{
                                    "0":{
                                        "items": 1
                                    },
                                    "768":{
                                        "items": 1.4
                                    },
                                    "992":{
                                        "items": 1.6
                                    },
                                    "1200":{
                                        "items": 1.1
                                    },
                                    "1360":{
                                        "items": 1.2
                                    },
                                    "1600":{
                                        "items": 1.6
                                    }
                                }
                            }'>
                            <div class="item">
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='000ms'>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonials-card__rating -->
                                    <div class="testimonials-card__content">
                                        Crystalotte delivers unmatched streaming quality. The service is reliable, and the
                                        team is always transparent about costs, which I appreciate.
                                    </div><!-- /.testimonials-card__content -->
                                    <div class="testimonials-card__author">
                                        <img src="assets/images/resources/testi-1-1.jpg" alt="Anthony B. Castillo">
                                        <h3 class="testimonials-card__name">
                                            Anthony B. Castillo
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Customer</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__author -->
                                    <div class="testimonials-card__quote">
                                        <i class="icon-quote"></i>
                                        <i class="icon-quote"></i>
                                    </div>
                                </div><!-- /.testimonials-card -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='100ms'>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonials-card__rating -->
                                    <div class="testimonials-card__content">
                                        I’ve been using this IPTV service for months now. Everything works flawlessly, and
                                        support is always quick to respond whenever needed.
                                    </div><!-- /.testimonials-card__content -->
                                    <div class="testimonials-card__author">
                                        <img src="assets/images/resources/testi-1-2.jpg" alt="Sarah Albert">
                                        <h3 class="testimonials-card__name">
                                            Sarah Albert
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Customer</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__author -->
                                    <div class="testimonials-card__quote">
                                        <i class="icon-quote"></i>
                                        <i class="icon-quote"></i>
                                    </div>
                                </div><!-- /.testimonials-card -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="testimonials-card wow fadeInUp" data-wow-duration='1500ms'
                                    data-wow-delay='200ms'>
                                    <div class="testimonials-card__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- /.testimonials-card__rating -->
                                    <div class="testimonials-card__content">
                                        The experience has been fantastic! From smooth streaming to a wide range of
                                        channels, this is by far the best IPTV service I’ve tried.
                                    </div><!-- /.testimonials-card__content -->
                                    <div class="testimonials-card__author">
                                        <img src="assets/images/resources/testi-1-3.jpg" alt="David Cooper">
                                        <h3 class="testimonials-card__name">
                                            David Cooper
                                        </h3><!-- /.testimonials-card__name -->
                                        <p class="testimonials-card__designation">Customer</p>
                                        <!-- /.testimonials-card__designation -->
                                    </div><!-- /.testimonials-card__author -->
                                    <div class="testimonials-card__quote">
                                        <i class="icon-quote"></i>
                                        <i class="icon-quote"></i>
                                    </div>
                                </div><!-- /.testimonials-card -->
                            </div><!-- /.item -->
                        </div><!-- /.testimonials-one__carousel -->
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row g-3 image-gallery">
                    <!-- Colonne pour chaque image -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="assets/images/chat/chat1.jpeg" alt="Image 1">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="assets/images/chat/chat2.jpg" alt="Image 2">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="assets/images/chat/chat3.jpeg" alt="Image 3">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="assets/images/chat/chat4.jpg" alt="Image 4">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="assets/images/chat/chat5.jpeg" alt="Image 5">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="assets/images/chat/chat6.jpg" alt="Image 6">
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.testimonials-one -->

    <section class="blog-one" id="blog">
        <div class="container">
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline bw-split-in-right"><span
                        class="sec-title__tagline__left-border"></span>latest blog<span
                        class="sec-title__tagline__right-border"></span></h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title bw-split-in-left">Our Latest <span>Blog</span> News</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->
            <div class="blog-one__carousel ienet-owl__carousel ienet-owl__carousel--with-shadow ienet-owl__carousel--basic-nav owl-carousel owl-theme"
                data-owl-options='{
    "items": 1,
    "margin": 30,
    "loop": false,
    "smartSpeed": 700,
    "nav": false,
    "navText": ["<span class=\"icon-left-chevron\"></span>","<span class=\"icon-right-chevron\"></span>"],
    "dots": false,
    "autoplay": false,
    "responsive": {
        "0": {
            "nav": true,
            "items": 1
        },
        "768": {
            "nav": true,
            "items": 2
        },
        "992": {
            "items": 3
        }
    }
    }'>
                @foreach ($posts as $post)
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms'>
                            <div class="blog-card__image">
                                <img src="assets/images/blog/blog-1-1.png"
                                    alt="Cupidatat Nonproident, Sunt in Culpa qui Officia Deserunt">
                                <img src="assets/images/blog/blog-1-1.png"
                                    alt="Cupidatat Nonproident, Sunt in Culpa qui Officia Deserunt">
                                <a href="{{ route('blog', ['slug' => $post->getslug(), 'id' => $post]) }}"
                                    class="blog-card__image__link"><span class="sr-only">{{ $post->title }}</span>
                                    <!-- /.sr-only --></a>
                                <div class="blog-card__date">
                                    {{ $post->created_at->format('M') }}, {{ $post->created_at->format('d') }}</div>
                                <!-- /.blog-card__date -->
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="{{ route('blog', ['slug' => $post->getslug(), 'id' => $post]) }}"><i
                                                class="fas fa-user-alt"></i>by Admin</a>
                                    </li>
                                    <li><a href="{{ route('blog', ['slug' => $post->getslug(), 'id' => $post]) }}"><i
                                                class="fas fa-solid fa-list"></i>{{ $post->category->name }}</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a
                                        href="{{ route('blog', ['slug' => $post->getslug(), 'id' => $post]) }}">{{ $post->getShortTitle() }}</a>
                                </h3>
                                <!-- /.blog-card__title -->
                                <a href="{{ route('blog', ['slug' => $post->getslug(), 'id' => $post]) }}"
                                    class="blog-card__link">
                                    <span class="blog-card__link__front"><span
                                            class="fas fa-angle-double-right"></span></span>
                                    <span class="blog-card__link__back"><span
                                            class="fas fa-angle-double-right"></span>Read
                                        More</span>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one -->

    <div class="client-carousel ">
        <div class="container">
            <div class="client-carousel__one ienet-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
    "items": 5,
    "margin": 65,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":false,
    "dots":false,
    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
    "responsive":{
        "0":{
            "items":1,
            "margin": 0
        },
        "360":{
            "items":2,
            "margin": 30
        },
        "575":{
            "items":3,
            "margin": 30
        },
        "768":{
            "items":3,
            "margin": 40
        },
        "992":{
            "items": 4,
            "margin": 40
        },
        "1200":{
            "items": 5,
            "margin": 140
        }
    }
    }'>
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-1.png"
                        alt="ienet">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-1-hover.png"
                        alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-2.png"
                        alt="ienet">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-2-hover.png"
                        alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-3.png"
                        alt="ienet">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-3-hover.png"
                        alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-4.png"
                        alt="ienet">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-4-hover.png"
                        alt="ienet">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img class="client-carousel__one__item__normal" src="assets/images/resources/brand-1-5.png"
                        alt="ienet">
                    <img class="client-carousel__one__item__hover" src="assets/images/resources/brand-1-5-hover.png"
                        alt="ienet">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->

    <footer class="main-footer background-black">
        <div class="main-footer__bg background-black"
            style="background-image: url(assets/images/shapes/footer-bg-1-1.png);"></div>
        <div class="main-footer__shape-one" style="background-image: url(assets/images/resources/footer-shape-1.png);">
        </div>
        <div class="main-footer__shape-two" style="background-image: url(assets/images/resources/footer-shape-2.png);">
        </div>
        <!-- /.main-footer__bg -->
        <div class="main-footer__top">
            <div class="container">
                <div class="main-footer__top__inner">
                    <ul class="list-unstyled main-footer__top__info">
                        <li class="main-footer__top__info__item">
                            <span class="main-footer__top__info__icon"><i class="icon-mail"></i></span>
                            <a href="mailto:info@crystalotte.net">info@crystalotte.net</a>
                        </li>
                        <li class="main-footer__top__info__item">
                            <span class="main-footer__top__info__icon"><i class="icon-maps-and-flags"></i></span>
                            1211 Madison Ave, New York, NY
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="main-footer__top__right">
                        <div class="main-footer__top__social">

                            <a href="https://facebook.com/">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com/">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com/">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://www.youtube.com/">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.main-footer__top__social -->
                    </div><!-- /.main-footer__top__right -->
                </div><!-- /.main-footer__top__inner -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__top -->

        <div class="main-footer__bottom">
            <div class="container">
                <div class="main-footer__bottom__inner">
                    <p class="main-footer__copyright">
                        &copy; Copyright <span class="dynamic-year"></span> by Pone.
                </div><!-- /.main-footer__inner -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__bottom -->
    </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@crystalotte.net">needhelp@crystalotte.net</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="https://wa.me/16725384823">+1 (672) 538-4823</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">

                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="ienet-btn">
                    <span><i class="icon-search"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="icon-plus"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="{{ route('welcome') }}" aria-label="logo image"><img src="assets/images/logo-light.png"
                        alt="Crystalotte" height="80"></a>
            </div><!-- /.sidebar-one__logo-box -->
            <p class="sidebar-one__text">
                Explore endless entertainment options with our IPTV service, featuring premium channels, ultra-stable
                connections, and crystal-clear quality.
            </p>
            <h4 class="sidebar-one__title">Contact Info:</h4>
            <ul class="sidebar-one__info">
                <li>
                    <span class="fas fa-map-marker-alt"></span>
                    27, Dhaka London City Dhaka, Bangladesh
                </li>
                <li>
                    <span class="fas fa-clock"></span>
                    24H/7
                </li>
                <li>
                    <span class="fas fa-envelope"></span>
                    <a href="https://wa.me/16725384823">+1 (672) 538-4823</a>
                </li>
            </ul>
            <div class="sidebar-one__social">

                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://www.youtube.com/">
                    <i class="fab fa-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /sidebar-one__socila -->
            <h4 class="sidebar-one__title">Newsletter:</h4>
            <form action="{{ route('newsletter.subscribe') }}" data-url="MAILCHIMP_FORM_URL"
                class="sidebar-one__newsletter mc-form" method="POST">
                @csrf
                <input type="text" name="email" placeholder="Email address">
                <button type="button" onclick="event.preventDefault();
                        this.closest('form').submit();" class="fas fa-paper-plane">
                    <span class="sr-only">submit</span><!-- /.sr-only -->
                </button>
            </form><!-- /.footer-widget__newsletter mc-form -->
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- Sidebar One Start -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


@endsection
