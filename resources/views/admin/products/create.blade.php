@extends('admin.master')
@section('title', 'Admin | Add Product')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.Add Product') }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('dashboard.Name') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Name') }}" name="name">
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Description') }}</label>
                        <textarea class="form-control" placeholder="{{ __('dashboard.Description') }}" rows="3"
                            name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Price') }}</label>
                        <input type="number" class="form-control" placeholder="{{ __('dashboard.Price') }}"
                            name="price">
                    </div>
                    <div class="form-group">
                        <label>{{ __('dashboard.Quantity') }}</label>
                        <input type="number" class="form-control" placeholder="{{ __('dashboard.Quantity') }}"
                            name="quantity">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">{{ __('dashboard.Choose Image') }}</label>
                    </div>
                    <div class="form-group">
                        <label style="margin-top: 10px">{{ __('dashboard.Category') }}</label>
                        <select class="custom-select" name="category_id">
                            <option disabled selected>{{ __('dashboard.Choose Category') }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success px-5">{{ __('dashboard.Save') }}</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
