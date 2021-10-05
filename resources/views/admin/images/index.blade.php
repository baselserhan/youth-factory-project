@extends('admin.master')
@section('title', 'Admin | All Images')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.View All Gallery') }}</h1>
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
                            <th>{{ __('dashboard.Name') }}</th>
                            <th>{{ __('dashboard.Description') }}</th>
                            <th>{{ __('dashboard.Image') }}</th>
                            <th>{{ __('dashboard.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <td>{{ $image->id }}</td>
                                <td>{{ $image->name }}</td>
                                <td>{{ $image->description }}</td>
                                <td><img width="100" src="{{ asset('uploads/' . $image->image) }}" alt=""></td>
                                <td>
                                    <a href="{{ route('admin.galleries.edit', $image->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.galleries.destroy', $image->id) }}" method="POST">
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

                {{ $images->links() }}

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
