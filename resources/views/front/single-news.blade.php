@extends('front.master')
@section('title', 'Single-News')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>اقرأ تفاصيل أكثر</p>
                        <h1>تفاصيل المقال</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single article section -->
    <div class="mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-article-section">
                        <div class="single-article-text">
                            <div class="single-artcile-bg"
                                style="background-image: url({{ asset('uploads/' . $post->image) }})"></div>
                            <p class="blog-meta">
                                <span class="date"><i
                                        class="fas fa-calendar"></i>{{ $post->created_at->diffForHumans() }}</span>
                            </p>
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->body }}</p>
                            <h4>:مشاركة</h4>
                            <ul class="product-share">
                                <li><a href="https://www.facebook.com/AbuAita.Co/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/abuaita.co/"><i class="fab fa-instagram"></i></a>
                                </li>

                            </ul>
                        </div>

                        {{-- <div class="comments-list-wrap">
                            <h3 class="comment-count-title">3 Comments</h3>
                            <div class="comment-list">
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="assets/img/avaters/avatar1.png" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Jenny Joe <span class="comment-date">Aprl 26, 2020</span> <a
                                                href="#">reply</a>
                                        </h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna,
                                            maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros
                                            porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor,
                                            in interdum ante faucibus.</p>
                                    </div>
                                    <div class="single-comment-body child">
                                        <div class="comment-user-avater">
                                            <img src="assets/img/avaters/avatar3.png" alt="">
                                        </div>
                                        <div class="comment-text-body">
                                            <h4>Simon Soe <span class="comment-date">Aprl 27, 2020</span> <a
                                                    href="#">reply</a></h4>
                                            <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna,
                                                maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros
                                                porttitor, in interdum ante faucibus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-body">
                                    <div class="comment-user-avater">
                                        <img src="assets/img/avaters/avatar2.png" alt="">
                                    </div>
                                    <div class="comment-text-body">
                                        <h4>Addy Aoe <span class="comment-date">May 12, 2020</span> <a href="#">reply</a>
                                        </h4>
                                        <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna,
                                            maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros
                                            porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor,
                                            in interdum ante faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="comment-template">
                            <h4>Leave a comment</h4>
                            <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                            <form action="{{ route('store'), $post->slug }}" method="POST">
                                @csrf
                                <p>
                                    <input type="text" placeholder="Your Name" required name="user_id">
                                    <input type="email" placeholder="Your Email" required email name="email">
                                </p>
                                <p><textarea name="message" id="comment" cols="30" rows="10" placeholder="Your Message"
                                        required></textarea></p>
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div> --}}
                        {{-- @csrf
                        @comments(['model' => $post]) --}}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-section">
                        <div class="recent-posts">
                            <h4>Recent Posts</h4>
                            @foreach ($posts as $post)
                                <ul>
                                    <li><a href="{{ route('newsDetails', $post->slug) }}">{{ $post->title }}</a>
                                    </li>
                                </ul>
                            @endforeach

                        </div>
                        <div class="archive-posts">
                            <h4>Archive Posts</h4>
                            <ul>
                                <li><a href="single-news.html">JAN 2019 (5)</a></li>
                                <li><a href="single-news.html">FEB 2019 (3)</a></li>
                                <li><a href="single-news.html">MAY 2019 (4)</a></li>
                                <li><a href="single-news.html">SEP 2019 (4)</a></li>
                                <li><a href="single-news.html">DEC 2019 (3)</a></li>
                            </ul>
                        </div>
                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="single-news.html">Apple</a></li>
                                <li><a href="single-news.html">Strawberry</a></li>
                                <li><a href="single-news.html">BErry</a></li>
                                <li><a href="single-news.html">Orange</a></li>
                                <li><a href="single-news.html">Lemon</a></li>
                                <li><a href="single-news.html">Banana</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single article section -->
@stop
