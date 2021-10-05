@extends('front.master')
@section('title', 'Home')
@section('content')
    <!-- home page slider -->
    <div class="homepage-slider">
        @foreach ($sliders as $slider)
            <!-- single home slider -->
            <div class="single-homepage-slider homepage-bg-1"
                style="background-image: url({{ asset('uploads/' . $slider->image) }})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1 text-right">
                            <div class="hero-text">
                                <div class="hero-text-tablecell">
                                    <p class="subtitle">{{ $slider->subtitle }}</p>
                                    <h1>{{ $slider->caption }}</h1>
                                    <div class="hero-btns">
                                        <a href="{{ route('about') }}" class="boxed-btn">عن الشركة</a>
                                        <a href="{{ route('contact') }}" class="bordered-btn">تواصل معنا</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">! نسعى دائماً لأن نكون الأفضل</p>
                                <h1>! ثقتكم هي سر نجاحنا</h1>
                                <div class="hero-btns">
                                    <a href="{{ route('about') }}" class="boxed-btn">عن الشركة</a>
                                    <a href="{{ route('contact') }}" class="bordered-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">! خليك طبيعي</p>
                                <h1>! جودة تستحق الثقة</h1>
                                <div class="hero-btns">
                                    <a href="{{ route('about') }}" class="boxed-btn">عن الشركة</a>
                                    <a href="{{ route('contact') }}" class="bordered-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    <!-- end home page slider -->



    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">{{ __('general.All') }}</span> {{ __('general.Products') }}
                        </h3>
                        <p>{{ __('general.ProductsTitle') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('productDetails', ['id' => $product->id]) }}"><img
                                        src="{{ asset('uploads/' . $product->image) }}" alt=""></a>
                            </div>
                            <h3>{{ $product->name }}</h3>
                            <p class="product-price"></p>

                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </div>
    <!-- end product section -->



    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        @foreach ($testimonials as $testimonial)
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="{{ asset('uploads/' . $testimonial->image) }}" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>{{ $testimonial->name }} <span>{{ $testimonial->position }}</span></h3>
                                    <p class="testimonial-body">
                                        {{ $testimonial->quotation }}
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub"></p>
                        <h2>{{ __('general.We') }} <span
                                class="orange-text">{{ __('general.Jamal AbuAita Company') }}</span></h2>
                        <p>{{ __('general.About Company') }} </p>
                        <a href="{{ route('about') }}" class="boxed-btn mt-4">{{ __('general.Know More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    <!-- gallery section -->
    <div class="col-lg-8 offset-lg-2 text-center">
        <div class="section-title">
            <h3><span class="orange-text">{{ __('general.Show') }}</span> {{ __('general.Gallery') }}</h3>
            <p>{{ __('general.GalleryTitle') }}</p>
        </div>
    </div>
    <div class="gallery-section">
        <div class="inner-width">
            <div class="gallery">
                @foreach ($images as $image)
                    <a href="{{ asset('uploads/' . $image->image) }}" class="image">
                        <img src="{{ asset('uploads/' . $image->image) }}" alt="{{ $image->name }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end gallery section -->

    <!-- latest news -->

    <div class="latest-news pt-150 pb-150">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">{{ __('general.Latest') }}</span> {{ __('general.News') }}</h3>
                    <p>{{ __('general.Latest NewsTitle') }}</p>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="{{ route('newsDetails', $post->slug) }}">
                                <div class="latest-news-bg news-bg-1"
                                    style="background-image: url({{ asset('uploads/' . $post->image) }})"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="{{ route('newsDetails', $post->slug) }}">{{ $post->title }}</a>
                                </h3>
                                <p class="blog-meta">
                                    <span class="date"><i
                                            class="fas fa-calendar"></i>{{ $post->created_at->diffForHumans() }}</span>
                                </p>
                                <a href="{{ route('newsDetails', $post->slug) }}" class="read-more-btn">
                                    {{ __('general.Read More') }}
                                    <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </div>
    <!-- end latest news -->
@stop
