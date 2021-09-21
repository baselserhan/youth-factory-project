@extends('front.master')
@section('title', 'About-Us')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>! نقدم لكم ألذ وأطيب المنتجات</p>
                        <h1>عن الشركة</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- featured section -->
    <div class="feature-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3" style="text-align: center">لماذا<span class="orange-text"> شركة أبو
                                عيطة</span></h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Home Delivery</h3>
                                        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Best Price</h3>
                                        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Custom Box</h3>
                                        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Quick Refund</h3>
                                        <p>sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end featured section -->

    <!-- team section -->
    <div class="mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3>فريق <span class="orange-text">العمل</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-team-item">
                            <div class="team-bg team-bg-1"
                                style="background-image: url({{ asset('uploads/' . $team->image) }})">
                            </div>
                            <h4>{{ $team->name }} <span>{{ $team->position }}</span></h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end team section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-80 mb-150">
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

@stop
