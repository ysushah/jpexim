<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JPExim</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Frontend/assets/images/favicons/apple-touch-icon.png'); }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Frontend/assets/images/favicons/favicon-32x32.png'); }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Frontend/assets/images/favicons/favicon-16x16.png'); }}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Shadows+Into+Light&amp;display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/bootstrap/css/bootstrap.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/animate/animate.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/animate/custom-animate.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/fontawesome/css/all.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/jarallax/jarallax.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/nouislider/nouislider.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/nouislider/nouislider.pips.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/odometer/odometer.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/swiper/swiper.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/icomoon-icons/style.css'); }}">
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/tiny-slider/tiny-slider.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/reey-font/stylesheet.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/owl-carousel/owl.carousel.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/owl-carousel/owl.theme.default.min.css'); }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/assets/vendors/twentytwenty/twentytwenty.css'); }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('Frontend/assets/css/agriox.css'); }}" />
</head>

<body>

    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('Frontend/assets/images/loader.png'); }}" alt="" />
    </div>

    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('layouts.header');

        {{ $slot }}
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content">

            </div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider main-slider-one">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 7000
            }}'>

                <div class="swiper-wrapper">
                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-v1-1.jpg);"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner">
                                        <div class="main-slider__content">
                                            <span class="main-slider-tagline">We’re producing natural goods</span>
                                            <h2 class="main-slider__title">Welcome to <br> Agriculture <span><span
                                                        class="leaf"><img src="{{ asset('Frontend/assets/images/resources/leaf.png'); }}"
                                                            alt="" /></span>Farm</span></h2>
                                            <p class="main-slider__text">There are many of passages of lorem Ipsum, but
                                                the majori have<br> suffered alteration in some form.</p>
                                        </div>
                                        <div class="main-slider__button-box">
                                            <div class="arrow-icon"><img
                                                    src="{{ asset('Frontend/assets/images/icon/main-slider__button-arrow.png'); }}" alt="" />
                                            </div>
                                            <a href="#" class="thm-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->

                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-v1-2.jpg);"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner">
                                        <div class="main-slider__content">
                                            <span class="main-slider-tagline">We’re producing natural goods</span>
                                            <h2 class="main-slider__title">Welcome to <br> Agriculture <span><span
                                                        class="leaf"><img src="{{ asset('Frontend/assets/images/resources/leaf.png'); }}"
                                                            alt="" /></span>Farm</span></h2>
                                            <p class="main-slider__text">There are many of passages of lorem Ipsum, but
                                                the majori have<br> suffered alteration in some form.</p>
                                        </div>
                                        <div class="main-slider__button-box">
                                            <div class="arrow-icon"><img
                                                    src="{{ asset('Frontend/assets/images/icon/main-slider__button-arrow.png'); }}" alt="" />
                                            </div>
                                            <a href="#" class="thm-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->

                    <!--Start Single Swiper Slide-->
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-v1-3.jpg);"></div>
                        <div class="image-layer-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-slider-inner">
                                        <div class="main-slider__content">
                                            <span class="main-slider-tagline">We’re producing natural goods</span>
                                            <h2 class="main-slider__title">Welcome to <br> Agriculture <span><span
                                                        class="leaf"><img src="{{ asset('Frontend/assets/images/resources/leaf.png'); }}"
                                                            alt="" /></span>Farm</span></h2>
                                            <p class="main-slider__text">There are many of passages of lorem Ipsum, but
                                                the majori have<br> suffered alteration in some form.</p>
                                        </div>
                                        <div class="main-slider__button-box">
                                            <div class="arrow-icon"><img
                                                    src="{{ asset('Frontend/assets/images/icon/main-slider__button-arrow.png'); }}" alt="" />
                                            </div>
                                            <a href="#" class="thm-btn">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Swiper Slide-->
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <span class="icon-right-arrow-2"></span>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <span class="icon-right-arrow-2"></span>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->


        <!--About One Start-->
        <section class="about-one">
            <div class="about-one__bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img class="float-bob-y" src="{{ asset('Frontend/assets/images/backgrounds/about-v1-bg.png'); }}" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <!--Start About One Left-->
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__left-img">
                                <div class="about-one__left-img-inner">
                                    <img src="{{ asset('Frontend/assets/images/about/about-v1-img1.jpg'); }}" alt="" />
                                </div>
                            </div>
                            <div class="about-one__left-overlay wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="1500ms">
                                <div class="icon">
                                    <span class="icon-investment"></span>
                                </div>
                                <div class="title">
                                    <h2><span class="odometer" data-count="87600">00</span></h2>
                                    <p>Successfully Project Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Left-->

                    <!--Start About One Content-->
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png'); }}" alt="" />
                                </div>
                                <span class="sec-title__tagline">Our introduction</span>
                                <h2 class="sec-title__title">Pure Agriculture and <br>Organic Form</h2>
                            </div>

                            <h2 class="about-one__content-title">We’re Leader in Agriculture Market</h2>
                            <p class="about-one__content-text">There are many variations of passages of available but
                                the majority have suffered alteration in some form, by injected humou or randomised
                                words even slightly believable.</p>
                            <ul class="about-one__content-list">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <p>Lorem Ipsum is not simply random text</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <p>If you are going to use a passage</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <p>Making this the first true generator on the Internet</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <p>Various versions have evolved over the years</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="about-one__content-video-box">
                                <div class="about-one__content-video-box-img-wrapper">
                                    <div class="about-one__content-video-box-img">
                                        <img src="{{ asset('Frontend/assets/images/resources/about-v1-video-img.jpg'); }}" alt="" />
                                        <div class="icon">
                                            <a class="video-popup wow zoomIn animated animated animated"
                                                data-wow-delay="300ms" data-wow-duration="1500ms" title=" Video"
                                                href="https://www.youtube.com/watch?v=8DP4NgupAhI">
                                                <span class="icon-play-button-1"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.about-one__content-video-box-img-wrapper -->
                                <div class="about-one__content-video-box-title">
                                    <p>Watch our video</p>
                                    <h3>Tips for Ripening your Fruits</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End About One Content-->
                </div>
            </div>
        </section>
        <!--About One End-->


        <!--Features One Start-->
        <section class="features-one clearfix">
            <div class="container">
                <div class="row">
                    <!--Start Single Features One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                        <div class="features-one__single">
                            <div class="features-one__single-img">
                                <img src="{{ asset('Frontend/assets/images/feauters/features-v1-img1.jpg'); }}" alt="" />
                                <div class="features-one__single-title text-center">
                                    <h3><a href="#">Best Quality <br> Standards</a></h3>
                                </div>
                            </div>
                            <a href="services-details.html" class="features-one__single__more">
                                <span class="icon-right-arrow-2"></span>
                            </a><!-- /.feature-one__single__more -->
                        </div>
                    </div>
                    <!--End Single Features One-->

                    <!--Start Single Features One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                        <div class="features-one__single">
                            <div class="features-one__single-img">
                                <img src="{{ asset('Frontend/assets/images/feauters/features-v1-img2.jpg'); }}" alt="" />
                                <div class="features-one__single-title text-center">
                                    <h3><a href="#">Smart Organic <br>Services</a></h3>
                                </div>
                            </div>
                            <a href="services-details.html" class="features-one__single__more">
                                <span class="icon-right-arrow-2"></span>
                            </a><!-- /.feature-one__single__more -->

                        </div>
                    </div>
                    <!--End Single Features One-->

                    <!--Start Single Features One-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp animated animated">
                        <div class="features-one__single style2 text-center">
                            <div class="features-one__single-bg"
                                style="background-image: url(assets/images/backgrounds/features-one-single-bg.png);">
                            </div>
                            <div class="features-one__single-img">
                                <img src="{{ asset('Frontend/assets/images/feauters/features-v1-img3.jpg'); }}" alt="" />
                            </div>
                            <div class="features-one__single-title text-center">
                                <h3><a href="#">Agriculture <br>products</a></h3>
                            </div>
                            <div class="button">
                                <a href="#" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Features One-->
                </div>
            </div>
        </section>
        <!--Features One End-->

        <!--Video One Start-->
        <section class="video-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/video-one-bg.jpg);">
            <div class="video-one-border"></div>
            <div class="video-one-border video-one-border-two"></div>
            <div class="video-one-border video-one-border-three"></div>
            <div class="video-one-border video-one-border-four"></div>
            <div class="video-one-border video-one-border-five"></div>
            <div class="video-one-border video-one-border-six"></div>

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__wrpper">
                            <div class="video-one__left">
                                <div class="video-one__leaf"></div><!-- /.video-one__leaf -->
                                <h2 class="video-one__title">Agriculture Matters to <br>the Future of Development</h2>
                                <div class="video-one__btn">
                                    <a href="#" class="thm-btn">Discover more</a>
                                </div>
                            </div>
                            <div class="video-one__right">
                                <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <a class="video-popup" title=" Video"
                                        href="https://www.youtube.com/watch?v=8DP4NgupAhI">
                                        <span class="icon-play-button-1"></span>
                                    </a>
                                    <span class="border-animation border-1"></span>
                                    <span class="border-animation border-2"></span>
                                    <span class="border-animation border-3"></span>
                                </div>
                                <div class="title">
                                    <h2>Watch the video</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png'); }}" alt="">
                    </div>
                    <span class="sec-title__tagline">What we’re doing</span>
                    <h2 class="sec-title__title">Services We Offer</h2>
                </div>
                <div class="row">
                    <!--Start Single Services One-->
                    <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="{{ asset('Frontend/assets/images/services/services-v1-img1.jpg'); }}" alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <div class="services-one__single-img-icon">
                                    <span class="icon-agriculture"></span>
                                </div>
                                <h3><a href="services-details.html">Agriculture<br> Products</a></h3>
                                <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                                <a href="services-details.html" class="read-more-btn"><span
                                        class="icon-right-arrow-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                    <!--Start Single Services One-->
                    <div class="col-xl-3 col-lg-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="{{ asset('Frontend/assets/images/services/services-v1-img2.jpg'); }}" alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <div class="services-one__single-img-icon">
                                    <span class="icon-harvest"></span>
                                </div>
                                <h3><a href="services-details.html">Fresh <br>Vegetables</a></h3>
                                <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                                <a href="services-details.html" class="read-more-btn"><span
                                        class="icon-right-arrow-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                    <!--Start Single Services One-->
                    <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="{{ asset('Frontend/assets/images/services/services-v1-img3.jpg'); }}" alt="" />
                                </div>

                            </div>
                            <div class="services-one__single-content text-center">
                                <div class="services-one__single-img-icon">
                                    <span class="icon-growth"></span>
                                </div>
                                <h3><a href="services-details.html">Oragnic <br>Products</a></h3>
                                <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                                <a href="services-details.html" class="read-more-btn"><span
                                        class="icon-right-arrow-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->

                    <!--Start Single Services One-->
                    <div class="col-xl-3 col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-inner">
                                    <img src="{{ asset('Frontend/assets/images/services/services-v1-img4.jpg'); }}" alt="" />
                                </div>
                            </div>
                            <div class="services-one__single-content text-center">
                                <div class="services-one__single-img-icon">
                                    <span class="icon-dairy-products"></span>
                                </div>
                                <h3><a href="services-details.html">Dairy<br> Products</a></h3>
                                <p>Lorem ium dolor sit ametad pisicing elit sed simply do ut.</p>
                                <a href="services-details.html" class="read-more-btn"><span
                                        class="icon-right-arrow-2"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End Single Services One-->
                </div>
            </div>
        </section>
        <!--Services One End-->



        <!--Projects One Start-->
        <section class="projects-one">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png'); }}" alt="">
                    </div>
                    <span class="sec-title__tagline">Recently completed work</span>
                    <h2 class="sec-title__title">Explore Our Projects</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="projects-one__carousel owl-carousel owl-theme owl-dot-type1">
                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img1.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img2.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img3.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img4.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img1.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img2.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img3.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img4.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img1.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img2.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img3.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->

                            <!--Start Single Projects One-->
                            <div class="projects-one__single wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <div class="projects-one__single-img">
                                    <img src="{{ asset('Frontend/assets/images/project/projects-v1-img4.jpg'); }}" alt="" />
                                    <div class="overlay-content">
                                        <p>Agriculture</p>
                                        <h3><a href="projects-details.html">Harvest Innovations</a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Projects One-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Projects One End-->

        <!--Testimonials One Start-->
        <section class="testimonials-one jarallax clearfix" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/Testimonials-v1-bg.jpg);">
            <div class="container">
                <div class="row">
                    <!--Start Testimonials One Left-->
                    <div class="col-xl-4">
                        <div class="testimonials-one__left">
                            <div class="testimonials-one__left-bg"></div>
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png'); }}" alt="">
                                </div>
                                <span class="sec-title__tagline">Our testimonials</span>
                                <h2 class="sec-title__title">What They’re <br>Talking About <br> Agriox</h2>
                            </div>
                        </div>
                    </div>
                    <!--End Testimonials One Left-->

                    <!--Start Testimonials One Right-->
                    <div class="col-xl-8">
                        <div class="testimonials-one__right">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="testimonials-one__carousel owl-carousel owl-theme">
                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore text.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{ asset('Frontend/assets/images/testimonial/testimonials-v1-img1.jpg'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Kevin Martin</h4>
                                                    <p>Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Start Single Testimonials One-->

                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore text.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{ asset('Frontend/assets/images/testimonial/testimonials-v1-img2.jpg'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Christine Eve</h4>
                                                    <p>Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Start Single Testimonials One-->

                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore text.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{ asset('Frontend/assets/images/testimonial/testimonials-v1-img1.jpg'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Kevin Martin</h4>
                                                    <p>Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Start Single Testimonials One-->

                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore text.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{ asset('Frontend/assets/images/testimonial/testimonials-v1-img2.jpg'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Christine Eve</h4>
                                                    <p>Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Start Single Testimonials One-->

                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore text.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{ asset('Frontend/assets/images/testimonial/testimonials-v1-img1.jpg'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Kevin Martin</h4>
                                                    <p>Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Start Single Testimonials One-->

                                        <!--Start Single Testimonials One-->
                                        <div class="testimonials-one__single">
                                            <p class="testimonials-one__single-text">Lorem ipsum is simply free text
                                                dolor not sit amet, consectetur notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore text.</p>
                                            <div class="testimonials-one__single-client-info">
                                                <div class="testimonials-one__single-client-info-img">
                                                    <div class="testimonials-one__single-client-info-img-inner">
                                                        <img src="{{ asset('Frontend/assets/images/testimonial/testimonials-v1-img2.jpg'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="icon">
                                                        <span class="icon-right-quotation-mark"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonials-one__single-client-info-title">
                                                    <h4>Christine Eve</h4>
                                                    <p>Customer</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Start Single Testimonials One-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Testimonials One Right-->
                </div>
            </div>
        </section>
        <!--Testimonials One End-->


        <!--Providing Quality One Start-->
        <section class="providing-quality-one clearfix">
            <div class="providing-quality-one__bg"><img src="{{ asset('Frontend/assets/images/backgrounds/providing-quality-one-bg.png'); }}"
                    alt="" /></div>

            <div class="providing-quality-one__shape"></div><!-- /.providing-quality-one__shape -->

            <div class="container-fullwidth">
                <div class="row">
                    <!--Start Providing Quality One Img-->
                    <div class="col-xl-6 providing-quality-one__image-block clearfix">
                        <div class="providing-quality-one__image__line float-bob-y"></div>
                        <!-- /.providing-quality-one__image__line -->
                        <img src="{{ asset('Frontend/assets/images/resources/providing-quality-v1-img.jpg'); }}" alt="">
                        <div class="providing-quality-one__logo">
                            <img src="{{ asset('Frontend/assets/images/resources/providing-quality.png'); }}" alt="" />
                        </div>
                    </div>
                    <!--End Providing Quality One Img-->

                    <!--Start Providing Quality One Content Box-->
                    <div class="col-xl-6">
                        <div class="providing-quality-one__content-box">
                            <div class="sec-title">
                                <div class="icon">
                                    <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon2.png'); }}" alt="">
                                </div>
                                <span class="sec-title__tagline">Modern Agriculture</span>
                                <h2 class="sec-title__title">Providing High Quality <br>Products</h2>
                            </div>

                            <ul class="providing-quality-one__content-box-list">
                                <li class="providing-quality-one__content-box-list-item">
                                    <div class="icon">
                                        <span class="icon-agriculture"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Making Healthy Foods</h3>
                                        <p>There are many variations of pass available but the majority have simply free
                                            text.</p>
                                    </div>
                                </li>

                                <li class="providing-quality-one__content-box-list-item">
                                    <div class="icon">
                                        <span class="icon-farm"></span>
                                    </div>
                                    <div class="text">
                                        <h3>Our Agriculture Growth</h3>
                                        <p>There are many variations of pass available but the majority have simply free
                                            text.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Providing Quality One Content Box-->
                </div>
            </div>
        </section>
        <!--Providing Quality One End-->


        <!--Blog One Start-->
        <section class="blog-one">
            <div class="blog-one__bg wow slideInDown" data-wow-delay="100ms" data-wow-duration="2500ms"></div>
            <div class="blog-one__shape"></div><!-- /.blog-one__shape -->
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png'); }}" alt="">
                    </div>
                    <span class="sec-title__tagline">from the blog</span>
                    <h2 class="sec-title__title">News & Articles</h2>
                </div>
                <div class="row">
                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('Frontend/assets/images/blog/blog-v1-img1.jpg'); }}" alt="" />
                                <div class="date-box">
                                    <span>30 July, 2021</span>
                                </div>
                                <div class="overlay-icon">
                                    <a href="news-details.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>

                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                                </ul>
                                <h2><a href="news-details.html">Why Eco and Walking or Agriculture for the
                                        Environment?</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->

                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('Frontend/assets/images/blog/blog-v1-img2.jpg'); }}" alt="" />
                                <div class="date-box">
                                    <span>30 July, 2021</span>
                                </div>
                                <div class="overlay-icon">
                                    <a href="news-details.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>

                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                                </ul>
                                <h2><a href="news-details.html">Bring to the table win-win survival strategies to
                                        ensure</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->

                    <!--Start Single Blog One-->
                    <div class="col-xl-4 col-lg-4  wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('Frontend/assets/images/blog/blog-v1-img3.jpg'); }}" alt="" />
                                <div class="date-box">
                                    <span>30 July, 2021</span>
                                </div>
                                <div class="overlay-icon">
                                    <a href="news-details.html"><span class="icon-plus"></span></a>
                                </div>
                            </div>

                            <div class="blog-one__single-content">
                                <ul class="meta-info">
                                    <li><a href="#"><i class="far fa-user-circle"></i>Jessica</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a></li>
                                </ul>
                                <h2><a href="news-details.html">Leverage agile frameworks to provide a robust
                                        synopsis</a></h2>
                            </div>
                        </div>
                    </div>
                    <!--End Single Blog One-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <section class="contact-one">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <img src="{{ asset('Frontend/assets/images/resources/sec-title-icon1.png'); }}" alt="">
                    </div>
                    <span class="sec-title__tagline">contact with us</span>
                    <h2 class="sec-title__title">Looking for Agriculture & <br> Organic Eco Services?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-one__content">
                            <p class="contact-one__text">There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected humou or randomised words
                                even believable.</p>
                            <ul class="list-unstyled ml-0 contact-one__lists">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Making this the first true generator on the Internet
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Lorem Ipsum is not simply random text
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    If you are going to use a passage
                                </li>
                            </ul><!-- /.list-unstyled ml-0 -->
                            <div class="contact-one__images">
                                <div class="contact-one__images__shape"></div><!-- /.contact-one__images__shape -->
                                <img src="{{ asset('Frontend/assets/images/resources/contact-1-1.png'); }}" alt="" class="contact-one__images-1">
                                <img src="{{ asset('Frontend/assets/images/resources/contact-1-2.png'); }}" alt="" class="contact-one__images-2">
                            </div><!-- /.contact-one__images -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <form action="https://layerdrops.com/agriox/assets/inc/sendemail.php"
                            class="contact-one__form comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div><!-- /.result -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <!--Company Logos One Start-->
        <section class="company-logos-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 40,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 40,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('Frontend/assets/images/resources/Company-Logos-v1-logo1.png'); }}" alt="">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Company Logos One End-->


        <!--Cta One Start-->
        <section class="cta-one" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__wrapper">
                            <div class="cta-one__left">
                                <div class="cta-one__left-icon">
                                    <span class="icon-farm"></span>
                                </div>
                                <div class="cta-one__left-title">
                                    <h2>We’re Leader in Agriculture Market</h2>
                                </div>
                            </div>
                            <div class="cta-one__right">
                                <div class="cta-one__right-btn">
                                    <a href="#" class="thm-btn">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Cta One End-->



        <!--Start Footer One-->
        <footer class="footer-one">
            <div class="footer-one__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__top-wrapper">
                                <div class="footer-one__bg"><img src="{{ asset('Frontend/assets/images/backgrounds/footer-one-bg.png'); }}"
                                        alt="" /></div>
                                <div class="row">
                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="footer-widget__column footer-widget__about">
                                            <div class="footer-widget__about-logo">
                                                <a href="index.html"><img src="{{ asset('Frontend/assets/images/resources/footer-logo.png'); }}"
                                                        alt=""></a>
                                            </div>
                                            <p class="footer-widget__about-text">Lorem ipsum dolor sit amet consect etur
                                                adi pisicing elit sed.</p>
                                            <div class="footer-widget__about-contact-box">
                                                <p class="phone"><a href="tel:123456789"><i
                                                            class="fas fa-phone-square-alt"></i>+92 666 888 0000</a></p>
                                                <p><a href="mailto:needhelp@company.com"><i
                                                            class="fa fa-envelope"></i>needhelp@company.com</a></p>
                                                <p class="text"><i class="fas fa-map-marker-alt"></i>666 road, broklyn
                                                    street new york</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                                        <div class="footer-widget__column footer-widget__news">
                                            <h2 class="footer-widget__title">News</h2>
                                            <ul class="footer-widget__news-list">
                                                <li class="footer-widget__news-list-item">
                                                    <div class="footer-widget__news-list-item-img">
                                                        <img src="{{ asset('Frontend/assets/images/resources/footer-widget-news-img1.png'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="footer-widget__news-list-item-title">
                                                        <p>20 Jul, 2021</p>
                                                        <h5><a href="#">A Clean Water Gives More<br> Good Taste</a></h5>
                                                    </div>
                                                </li>

                                                <li class="footer-widget__news-list-item">
                                                    <div class="footer-widget__news-list-item-img">
                                                        <img src="{{ asset('Frontend/assets/images/resources/footer-widget-news-img2.png'); }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="footer-widget__news-list-item-title">
                                                        <p>20 Jul, 2021</p>
                                                        <h5><a href="#">A Clean Water Gives More<br> Good Taste</a></h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                                        <div class="footer-widget__column footer-widget__explore">
                                            <h2 class="footer-widget__title">Explore</h2>
                                            <ul class="footer-widget__explore-list">
                                                <li class="footer-widget__explore-list-item"><a href="projects.html">New
                                                        Projects</a></li>
                                                <li class="footer-widget__explore-list-item"><a href="services.html">Our
                                                        Services</a></li>
                                                <li class="footer-widget__explore-list-item"><a href="about.html">About
                                                        Us</a></li>
                                                <li class="footer-widget__explore-list-item"><a href="#">Get in
                                                        Touch</a></li>
                                                <li class="footer-widget__explore-list-item"><a href="#">Volunteers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->

                                    <!--Start Footer Widget Column-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                                        <div class="footer-widget__column footer-widget__newletter">
                                            <h2 class="footer-widget__title">Newletter</h2>
                                            <p class="footer-widget__newletter-text">Sign up now to get daily latest
                                                news & updates from us</p>
                                            <form class="subscribe-form" action="#">
                                                <input type="email" name="email" placeholder="Email address">
                                                <button type="submit">Go</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--End Footer Widget Column-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Start Footer One Bottom-->
            <div class="footer-one__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="footer-one__bottom-inner">
                                <div class="footer-one__bottom-text">
                                    <p>&copy; Copyright 2021 by <a href="#">Layerdrops.com</a></p>
                                </div>
                                <div class="footer-one__bottom-social-links">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer One Bottom-->
        </footer>
        <!--End Footer One-->


    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('Frontend/assets/images/resources/mobilemenu_logo.png'); }}"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agriox.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow-2"></i></a>


    <script src="{{ asset('Frontend/assets/vendors/jquery/jquery-3.5.1.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jarallax/jarallax.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-appear/jquery.appear.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/jquery-validate/jquery.validate.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/nouislider/nouislider.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/odometer/odometer.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/swiper/swiper.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/tiny-slider/tiny-slider.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/wnumb/wNumb.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/wow/wow.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/isotope/isotope.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/countdown/countdown.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/owl-carousel/owl.carousel.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/twentytwenty/twentytwenty.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/twentytwenty/jquery.event.move.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/parallax/parallax.min.js'); }}"></script>
    <script src="{{ asset('Frontend/assets/vendors/tilt.js/tilt.jquery.js'); }}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    <!-- template js -->
    <script src="{{ asset('Frontend/assets/js/agriox.js'); }}"></script>


</body>


</html>
