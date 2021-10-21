<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if (!empty($title) && ($title == 'home'))
        <title> Visa Microfinance - Banking and Loan made easy </title>
    @else
        <title> h - Visa Microfinance </title>
@endif
<!-- /Required meta tags -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- /Favicon -->

    <!-- All CSS -->
    <link href="{{asset('assets/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- /All CSS -->

</head>

<body>

<!-- Header -->
<div class="navbar-area">
    <div class="acavo-responsive-nav">
        <!-- Container -->
        <div class="container">
            <div class="acavo-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('assets/images/download.png')}}" height="15%" width="15%" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <div class="acavo-nav">
        <!-- Container -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/images/download.png')}}" height="45%" width="45%" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">Home </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a href="/home" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="/transactions/index" class="nav-link">Transactions</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">{{ Auth::user()->name }} <i class='las la-angle-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /Container -->
    </div>
</div>
<!-- /Header -->



@yield('content')



<!-- Footer -->
<footer class="footer-style bg-gray-100 pt-200">
    <!-- Container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="footer-logo">
                    <a href="/">
                        <img src="{{asset('assets/images/download.png')}}" height="45%" width="45%" alt="logo">
                    </a>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
            <div class="col-xl-9 col-lg-9  col-md-8 mb-30">
                <div class="footer-top-wrapper">
                    <ul class="footer-top-link text-end">

                    </ul>
                </div>
            </div>
            <!-- /col -->
            <!-- col -->
        </div>
        <!-- /row -->
        <div class="footer-middle-area mt-30 pb-30 pt-60">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">About Us</h3>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consect etuer adipiscing elit, sed diam nonu mmy nibh
                                euis </p>
                        </div>
                        <div class="footer-icon">
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-instagram-alt"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Services</h3>
                        <div class="footer-link">
                            <ul>
                                <li><a href="about.html">Conditions</a></li>
                                <li><a href="our-history.html">Terms of Use</a></li>
                                <li><a href="about.html">Our Services</a></li>
                            </ul>
                        </div>
                        <div></div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Useful Links</h3>
                        <div class="footer-link">
                            <ul>
                                <li><a href="services-01.html">Conditions</a></li>
                                <li><a href="contact.html">Terms of Use</a></li>
                                <li><a href="contact.html">Our Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Subscribe</h3>
                        <div class="subscribes-form">
                            <form action="#">
                                <input placeholder="Enter email " type="email">
                                <button class="btn theme-btn-1 width-100 mt-10"><i
                                        class="lab la-telegram-plane me-2"></i>subscribe</button>
                            </form>
                        </div>
                        <div class="footer-info">
                            <p>Get the latest updates via email. Any time you may unsubscribe</p>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <div class="footer-bottom-area pt-25 pb-25">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="copyright">
                        <p>© Copyrights <?php echo date('Y') ?> <a href="/">Visa Microfinance.</a> All rights reserved.</p>
                    </div>
                </div>
                <!-- col -->
                <!-- /col -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="footer-bottom-link text-end">
                        <ul>
                            <li><a href="#">Privacy </a></li>
                            <li><a href="#"> Terms</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Help </a></li>
                        </ul>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /Container -->
</footer>
<!-- /Footer -->

<!-- Go top -->
<div class="go-top-area">
    <div class="go-top-wrap">
        <div class="go-top-btn-wrap">
            <div class="go-top go-top-btn">
                <i class="las la-angle-double-up"></i>
                <i class="las la-angle-double-up"></i>
            </div>
        </div>
    </div>
</div>
<!-- /Go top -->

<!-- JS -->
<script src="{{asset('assets/js/vendors.js')}}" defer></script>
<script src="{{asset('assets/js/plugins.js')}}" defer></script>
<script src="{{asset('assets/js/main.js')}}" defer></script>
<!-- /JS -->

</body>

</html>
