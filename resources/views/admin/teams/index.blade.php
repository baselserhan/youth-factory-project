@extends('admin.master')
@section('title', 'Admin | All Teams')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('dashboard.View All Teams') }}</h1>
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
                            <th>{{ __('dashboard.Position') }}</th>
                            <th>{{ __('dashboard.Image') }}</th>
                            <th>{{ __('dashboard.Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->position }}</td>
                                <td><img width="80" src="{{ asset('uploads/' . $team->image) }}" alt=""></td>
                                <td>
                                    <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-primary btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    <form class="d-inline" action="{{ route('admin.teams.destroy', $team->id) }}"
                                        method="POST">
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
