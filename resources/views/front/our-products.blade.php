@extends('front.master')
@section('title', 'Our-Products')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>طبيعى %100</p>
                        <h1>منتجاتنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($categories as $category)
                                <li data-filter=".filter-{{ $category->id }}">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-list">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center filter-{{ $category->id }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('productDetails', ['id' => $product->id]) }}"><img
                                        src="{{ asset('uploads/' . $product->image) }}" alt=""></a>
                            </div>
                            <h3>{{ $product->name }}</h3>
                            <p class="product-price"> {{ $product->price }} </p>

                        </div>
                    </div>
                @endforeach
            </div>

            {{ $products->links() }}
        </div>
    </div>
    <!-- end products -->

@stop
