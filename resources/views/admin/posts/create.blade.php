@extends('admin.master')
@section('title', 'Admin | Add Posts')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.Add Post') }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('dashboard.Title') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Title') }}" name="title">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">{{ __('dashboard.Choose Image') }}</label>
                    </div>
                    <div class="form-group">
                        <label style="padding-top: 10px">{{ __('dashboard.Excerpt') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Excerpt') }}"
                            name="excerpt">
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Body') }}</label>
                        <textarea class="form-control" placeholder="{{ __('dashboard.Body') }}" rows="3"
                            name="body"></textarea>
                    </div>
                    <button class="btn btn-success px-5">{{ __('dashboard.Save') }}</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
