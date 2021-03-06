@extends('admin.master')
@section('title', 'Admin | Add Category')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.Add Category') }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('dashboard.Name') }}</label>
                        <input type="text" class="form-control" placeholder="{{ __('dashboard.Name') }}" name="name">
                    </div>
                    <button class="btn btn-success px-5" onclick="Swal.fire(
                                                'Good job!',
                                                'Product has been added!',
                                                'success'
                                              )">{{ __('dashboard.Save') }}</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
