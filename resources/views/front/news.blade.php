@extends('front.master')
@section('title', 'News')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Organic Information</p>
                        <h1>News Article</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">آخر</span> المقالات</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p>
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
                                <a href="{{ route('newsDetails', $post->slug) }}" class="read-more-btn">read more
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
