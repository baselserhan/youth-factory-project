@extends('admin.master')
@section('title', 'Admin | Edit Team')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.Edit Team') }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>{{ __('dashboard.Name') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Name') }}" name="name"
                            value="{{ $team->name }}">
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Position') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Position') }}"
                            name="position" value="{{ $team->position }}">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <img width="50" src="{{ asset('uploads/' . $team->image) }}" alt="">
                        <label class="custom-file-label" for="customFile">{{ __('dashboard.Choose Image') }}</label>
                    </div>
                    <button class="btn btn-info px-5 mt-4">{{ __('dashboard.Update') }}</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
