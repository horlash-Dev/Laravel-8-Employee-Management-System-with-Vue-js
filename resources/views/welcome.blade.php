
 @extends('layouts.home_layout')

@section('home-content')
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(home-assets/images/main-slider/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h2>
                                        Employee Management Sysytem
                                    </h2>
                                    @guest
                                    <a href="{{ route('login') }}" class=" thm-btn">Login</a>
                                    @endguest
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
           
                </div><!-- /.swiper-wrapper -->



            </div><!-- /.swiper-container thm-swiper__slider -->

        </section><!-- /.main-slider -->

        <section class="trusted-company">
            <div class="trusted-company__bg" style="background-image: url(home-assets/images/shapes/trust-bg-1-1.png);"></div><!-- /.trusted-company__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="trusted-company__content">
                            <div class="block-title text-left">
                                <p>Employee</p>
                                <h2>How it works</h2>
                            </div><!-- /.block-title -->
                            <div class="trusted-company__image">
                                <img src="assets/images/resources/trust-1-1.png" alt="">
                                <p>This project is based on keeping employee records and allow employee to add or modify it own records also this application is useful for any companies or organization to keep and track record of any employee workinng in the organization. 

                                Easy access to employee current region and other related information.

                                To maintain employee record in the past.</p>
                            </div><!-- /.trusted-company__image -->
                        </div><!-- /.trusted-company__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="trusted-company__box-wrap">
                            <div class="trusted-company__box">
                                <span>01</span>
                                <p>New User should register and procced to their dashboard</p>
                            </div><!-- /.trusted-company__box -->
                            <div class="trusted-company__box">
                                <span>02</span>
                                <p>Fill in your details as an employee</p>
                            </div><!-- /.trusted-company__box -->
                            <div class="trusted-company__box">
                                <span>03</span>
                                <p>Have access to your records anytime and make changes to its.</p>
                            </div><!-- /.trusted-company__box -->
                        </div><!-- /.trusted-company__box-wrap -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.trusted-company -->



@endsection
