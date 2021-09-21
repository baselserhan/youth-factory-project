@extends('admin.master')
@section('title', 'Admin | Edit Testimonial')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Testimonial</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                @include('admin.includes.errors')
                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name"
                            value="{{ $testimonial->name }}">
                    </div>
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" placeholder="Position" name="position"
                            value="{{ $testimonial->position }}">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <img width="80" src="{{ asset('uploads/' . $testimonial->image) }}" alt="">
                        <label class="custom-file-label" for="customFile">Choose image</label>
                    </div>
                    <div class="form-group">
                        <label style="padding-top: 10px">Quotation</label>
                        <input type="text" class="form-control" placeholder="Quotation" name="quotation"
                            value="{{ $testimonial->quotation }}">
                    </div>
                    <button class="btn btn-success px-5 mt-4">Save</button>
                </form>

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
