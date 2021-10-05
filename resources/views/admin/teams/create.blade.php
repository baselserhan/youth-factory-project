@extends('admin.master')
@section('title', 'Admin | Add Team')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.Add Team') }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('dashboard.Name') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Name') }}" name="name">
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Position') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Position') }}"
                            name="position">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">{{ __('dashboard.Choose Image') }}</label>
                    </div>
                    <button class="btn btn-success px-5 mt-4">{{ __('dashboard.Save') }}</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
