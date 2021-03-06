@extends('admin.master')
@section('title', 'Admin | All Posts')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.Edit Post') }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>{{ __('dashboard.Title') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Title') }}" name="title"
                            value="{{ $post->title }}">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <img width="80" src="{{ asset('uploads/' . $post->image) }}" alt="">
                        <label class="custom-file-label" for="customFile">{{ __('dashboard.Choose Image') }}</label>
                    </div>
                    <div class="form-group">
                        <label style="padding-top: 30px">{{ __('dashboard.Excerpt') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Excerpt') }}"
                            name="excerpt" value="{{ $post->excerpt }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Body') }}</label>
                        <textarea class="form-control" placeholder="{{ __('dashboard.Body') }}" rows="3"
                            name="body">{{ $post->body }}</textarea>
                    </div>
                    <button class="btn btn-info px-5">{{ __('dashboard.Update') }}</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
