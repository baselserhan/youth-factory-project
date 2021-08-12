@extends('admin.master')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name"
                            value="{{ $category->name }}">
                    </div>
                    <button class="btn btn-info px-5" onclick="Swal.fire(
                                                                                    'Good job!',
                                                                                    'Product has been updated!',
                                                                                    'success'
                                                                                  )">Update</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
