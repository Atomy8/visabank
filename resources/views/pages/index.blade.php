@extends('layouts.app')

@section('content')

    <!-- Hero -->
    <div class="hero-1 oh pos-rel" style="background: url({{asset('assets/images/banner-bg.png')}})">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-5">
                    <div class="hero-1-content wow fadeInLeft animated">
                        <h5 class="cate  wow fadeInUp animated" data-wow-delay="0.2s">#Bank Loan</h5>
                        <h1 class="title  wow fadeInUp animated" data-wow-delay="0.4s">Personal Bank Loan
                            From ₦1,000,000</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.6s">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <div class="hero-1-button-group">
                            <a href="#" class="btn theme-btn-1  wow fadeInUp animated" data-wow-delay="0.8s"> Get
                                Started
                                <i class="uil uil-angle-right-b ml-2 mb-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-7 d-lg-block">
                    <div class="hero-1-thumb-15 wow fadeInUp animated" data-wow-delay="0.4s">
                        <img class="img-fluid wow fadeInRight animated" src="{{asset('assets/images/hero-1.png')}}" alt="">
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Hero -->

    <!-- Featured box -->
    <div class="featured-boxes-area">
        <!-- Container -->
        <div class="container">
            <div class="featured-boxes-inner">
                <!-- row -->
                <div class="row m-0">
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-fb7756">
                                <i class="ri-thumb-up-line"></i>
                            </div>
                            <h3>Professional Services</h3>
                            <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-facd60">
                                <i class="ri-wallet-line"></i>
                            </div>
                            <h3>Low costing</h3>
                            <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon color-1ac0c6">
                                <i class="ri-customer-service-2-line"></i>
                            </div>
                            <h3>Live Support</h3>
                            <p>Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="single-featured-box">
                            <div class="icon">
                                <i class="ri-shield-keyhole-line"></i>
                            </div>
                            <h3>Safe and Secure</h3>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                            <a href="#" class="read-more-btn">Read More</a>
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Featured box -->

    <!-- About Us -->
    <div class="about-area pt-100 pb-100">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-lg-6 align-self-center">
                    <div class="mb-20">
                        <img src="{{asset('assets/images/about.png')}}" class="img-fluid  wow fadeInLeft animated" data-wow-delay="0.2s"
                             alt="image">
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-6">
                    <div class="about-content warp">
                        <!-- row -->
                        <div class="row justify-content-center text-center">
                            <!-- col -->
                            <div class="col-lg-8 col-md-12 mb-50">
                                <div class="section-title">
                                    <h2 class="title">About Us</h2>
                                    <div class="title-bdr">
                                        <div class="left-bdr"></div>
                                        <div class="right-bdr"></div>
                                    </div>
                                    <p>We operate our banking services with latest technology.</p>
                                </div>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                        <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt labore dolore magna aliqua.</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>

                        <div class="about-btn justify-content-center text-center">
                            <a href="#" class="btn theme-btn-1">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /About Us -->

    <!-- /Services -->
    <div class="services-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12 mb-50">
                    <div class="section-title">
                        <h2 class="title">Best Services</h2>
                        <div class="title-bdr">
                            <div class="left-bdr"></div>
                            <div class="right-bdr"></div>
                        </div>
                        <p>Presenting Banking Plan & Services That are Right For You</p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <!-- col  -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/001.jpg" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">Personal Loan</a>
                            </h3>
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/002.jpg" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">Business Loan</a>
                            </h3>
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/003.jpg" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">Education Loan</a>
                            </h3>
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/004.jpg" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">Mobile Banking</a>
                            </h3>
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/005.jpg" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">Credit Card</a>
                            </h3>
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="image">
                            <a href="#">
                                <img src="images/services/006.jpg" alt="image">
                            </a>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">Online Deposit</a>
                            </h3>
                            <span>Lorem ipsum</span>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Services -->


    <!-- Cta -->
    <div class="cta-area">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <!-- col -->
                <div class="col-lg-12">
                    <div class="get-start-box">
                        <!-- col -->
                        <div class="col-lg-8">
                            <div class="section-heading">
                                <h5 class="section__meta text-white">#get in touch</h5>
                                <h2 class="section__title">Ready to get started ?</h2>
                                <p class="section__sub">Speak to a Visa Microfinance specialist at (0800-123-1234)</p>
                            </div>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-lg-4">
                            <div class="button-shared text-end">
                                <a href="#" class="btn cta-btn">
                                    Request Call Back <span class="la la-caret-right"></span>
                                </a>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Cta -->

@endsection
