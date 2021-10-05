@extends('admin.master')
@section('title', 'Admin | All Sliders')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.View All Sliders') }}</h1>
        </div>

        <style>
            .table td,
            .table th {
                vertical-align: middle;
            }

        </style>

        <!-- Content Row -->
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>{{ __('dashboard.ID') }}</th>
                            <th>{{ __('dashboard.SubTitle') }}</th>
                            <th>{{ __('dashboard.Caption') }}</th>
                            <th>{{ __('dashboard.Image') }}</th>
                            <th>{{ __('dashboard.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->subtitle }}</td>
                                <td>{{ $slider->caption }}</td>
                                <td><img width="100" src="{{ asset('uploads/' . $slider->image) }}" alt=""></td>
                                <td>
                                    <a href="{{ route('admin.sliders.edit', $slider->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"
                                                onclick="return confirm('Are you sure?')"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
