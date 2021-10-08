@extends('front.master')
@section('title', 'Single-Product')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>{{ __('general.Read More') }}</p>
                        <h1>{{ __('general.Product Details') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset('uploads/' . $product->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $product->name }}</h3>
                        <p class="single-product-pricing"></p>
                        <p>{{ $product->description }}</p>
                        <div class="single-product-form">
                            <p><strong>{{ __('general.Category') }}: </strong>{{ $product->category->name }}</p>
                        </div>
                        <h4>{{ __('general.Share') }}</h4>
                        <ul class="product-share">
                            <li><a href="https://www.facebook.com/AbuAita.Co/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/abuaita.co/"><i class="fab fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

@stop
