@extends('admin.master')
@section('title', 'Admin | All Categories')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.View All Categories') }}</h1>
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
                            <th>{{ __('dashboard.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('are you sure?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $categories->links() }}

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
