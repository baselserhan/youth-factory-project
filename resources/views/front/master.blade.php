<!DOCTYPE html>
<html lang="{{ app()->currentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}
    ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Website for AbuAita Company">

    <!-- title -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('frontasset/assets/img/logo.jpg') }}">
    <!-- google font -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('frontasset/assets/css/responsive.css') }}">
    <style>
        .gallery-section {
            width: 100%;
            padding: 60px 0;
            padding: 10px;
        }

        .inner-width {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }





        .gallery-section .gallery {
            display: flex;
            flex-wrap: wrap-reverse;
            justify-content: center;
        }

        .gallery-section .image {
            flex: 25%;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery-section .image img {
            width: 100%;
            height: 100%;
            transition: 0.4s;
        }

        .gallery-section .image:hover img {
            transform: scale(1.2);
        }

        @media screen and (max-width:960px) {
            .gallery-section .image {
                flex: 33.33%;
            }
        }

        @media screen and (max-width:768px) {
            .gallery-section .image {
                flex: 50%;
            }
        }

        @media screen and (max-width:480px) {
            .gallery-section .image {
                flex: 100%;
            }
        }

        @media screen and (max-width:992px) {
            .site-logo a img {
                margin-top: -15px;
            }
        }

        @media screen and (max-width:975px) {
            nav.main-menu ul li:hover>a {
                color: #f28123;
            }
        }

    </style>

    @if (app()->getLocale() == 'ar')
        <style>
            .main-menu,
            .abt-section,
            .footer-area {
                direction: rtl;
            }

            .abt-text {
                text-align: center;
            }

            .copyright {
                direction: rtl;
                text-align: right
            }

            .social-icons {
                text-align: left;
            }

        </style>
    @endif
</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker" style="height: 85px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('frontasset/assets/img/logo.jpg') }}" alt=""
                                    style="border-radius: 50%;" width="80px">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu" style="font-size: 16px; margin-top: -19px;">
                            <ul>
                                <li class="{{ request()->routeIs('homepage') ? 'current-list-item' : '' }}">
                                    <a href="{{ route('homepage') }}">{{ __('general.HomePage') }}</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'current-list-item' : '' }}">
                                    <a href=" {{ route('about') }}">{{ __('general.AboutPage') }}</a>
                                </li>
                                <li class="{{ request()->routeIs('products') ? 'current-list-item' : '' }}"><a
                                        href="{{ route('products') }}">{{ __('general.ProductsPage') }}</a></li>

                                <li class="{{ request()->routeIs('news') ? 'current-list-item' : '' }}"><a
                                        href="{{ route('news') }}">{{ __('general.BlogPage') }}</a></li>

                                <li class="{{ request()->routeIs('contact') ? 'current-list-item' : '' }}"><a
                                        href="{{ route('contact') }}">{{ __('general.ContactPage') }}</a></li>
                                <li>
                                    <div class="header-icons">
                                        <ul class="d-inline">
                                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                @if ($localeCode != app()->currentLocale())
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
                                        {{-- <a class="shopping-cart nav-item dropdown" href="{{ route('login') }}"><i
                                                class="fas fa-user nav-link dropdown-toggle" id="dropdownMenuButton"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                {{ Auth::user()->name }}</i></a> --}}
                                        <!-- Right Side Of Navbar -->
                                        <ul class="navbar-nav d-inline">
                                            <!-- Authentication Links -->
                                            @guest
                                                @if (Route::has('login'))

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}"><i
                                                                class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                                                    </li>
                                                @endif

                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}"> <i
                                                                class="fas fa-user">
                                                            </i> {{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }}
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>

                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <form class="search-bar" type="get" action="{{ route('search') }}">
                        <div class="search-bar-tablecell">
                            <h3>{{ __('general.Search for') }}</h3>
                            <input type="text" placeholder="{{ __('general.Keywords') }}" name="query">
                            <button type="submit">{{ __('general.Search') }} <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    @yield('content')

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">{{ __('general.AboutPage') }}</h2>
                        <p>{{ __('general.About Company') }} </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">{{ __('general.ContactPage') }}</h2>
                        <ul>
                            <li>{{ __('general.Adress') }}</li>
                            <li>abuaitah.co.2015@hotmail.com</li>
                            <li>0598893600</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">{{ __('general.Pages') }}</h2>
                        <ul>
                            <li><a href="{{ route('homepage') }}">{{ __('general.HomePage') }}</a></li>
                            <li><a href="{{ route('about') }}">{{ __('general.AboutPage') }}</a></li>
                            <li><a href="{{ route('products') }}">{{ __('general.ProductsPage') }}</a></li>
                            <li><a href="{{ route('news') }}">{{ __('general.BlogPage') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('general.ContactPage') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">{{ __('general.Subscribe') }}</h2>
                        <p>{{ __('general.SubscribeTitle') }}</p>
                        <form action="index.html">
                            <input type="email" placeholder="{{ __('general.SubscribeEmailPlaceholder') }}">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <p>
                        &copy;
                        <script>
                            document.write(new Date().getUTCFullYear());
                        </script> - <a href="#">{{ __('general.Jamal AbuAita Company') }}</a>،
                        {{ __('general.Copyright') }}
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 text-center text-white"
                    style="padding-top: 15.5px; opacity: 0.7; font-family: Tajawal">
                    <span>{{ __('general.Developer') }}</span>
                </div>
                <div class=" col-lg-4
                    text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/AbuAita.Co/" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/abuaita.co/" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->


    <!-- jquery -->
    <script src="{{ asset('frontasset/assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontasset/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('frontasset/assets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('frontasset/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('frontasset/assets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('frontasset/assets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('frontasset/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('frontasset/assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('frontasset/assets/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontasset/assets/js/main.js') }}"></script>
    <script>
        $(".gallery").magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
            },
        });
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-615f0b12fb9e181b"></script>

</body>

</html>
