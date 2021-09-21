<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Website for Abu Aita company">

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

    </style>
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
                            <a href="{{ route('homepage') }}">
                                <img src="{{ asset('frontasset/assets/img/logo.jpg') }}" alt=""
                                    style="border-radius: 50%" width="80px">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu" style="direction: rtl; font-size: 16px; margin-top: -19px">
                            <ul>
                                <li class="{{ request()->routeIs('homepage') ? 'current-list-item' : '' }}">
                                    <a href="{{ route('homepage') }}">الصفحة الرئيسية</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'current-list-item' : '' }}">
                                    <a href=" {{ route('about') }}">عن الشركة</a>
                                </li>
                                <li class="{{ request()->routeIs('products') ? 'current-list-item' : '' }}"><a
                                        href="{{ route('products') }}">منتجاتنا</a></li>

                                <li class="{{ request()->routeIs('news') ? 'current-list-item' : '' }}"><a
                                        href="{{ route('news') }}">مدونة</a></li>

                                <li class="{{ request()->routeIs('contact') ? 'current-list-item' : '' }}"><a
                                        href="{{ route('contact') }}">تواصل معنا</a></li>
                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="{{ route('login') }}"><i
                                                class="fas fa-user"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i
                                                class="fas fa-search"></i></a>
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
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>:ابحث عن</h3>
                            <input type="text" placeholder="كلمات مفتاحية">
                            <button type="submit">ابحث <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    @yield('content')

    <!-- footer -->
    <div class="footer-area" style="direction: rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">عن الشركة</h2>
                        <p>
                            شركة أبناء الحاج جمال الدين أبو عيطة - لصناعة الأجبان والألبان والمواد الغذائية
                            تعتبر من الشركات الرائدة في عالم تصنيع الأجبان والألبان حيث تهتم الشركة برغبات زبائنها </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">تواصل معنا</h2>
                        <ul>
                            <li>شمال غزة - شارع صلاح الدين - منطقة شعشاعة</li>
                            <li>abuaitah.co.2015@hotmail.com</li>
                            <li>0598893600</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">صفحات</h2>
                        <ul>
                            <li><a href="{{ route('homepage') }}">الصفحة الرئيسية</a></li>
                            <li><a href="{{ route('about') }}">عن الشركة</a></li>
                            <li><a href="{{ route('products') }}">منتجاتنا</a></li>
                            <li><a href="{{ route('news') }}">مدونة</a></li>
                            <li><a href="{{ route('contact') }}">تواصل معنا</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">اشترك معنا</h2>
                        <p>اشترك معنا لتصلك آخر الأخبار لمعرفة كل ما هو جديد</p>
                        <form action="index.html">
                            <input type="email" placeholder="بريدك الإلكتروني">
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
                <div class="col-lg-6 col-md-12">
                    <p> &copy; 2021 - <a href="#">شركة أبو عيطة</a>، جميع الحقوق محفوظة</p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
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
</body>

</html>
