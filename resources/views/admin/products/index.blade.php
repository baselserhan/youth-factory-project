@extends('admin.master')
@section('title', 'Admin | All Products')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Products</h1>
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
                            <th>ID</th>
                            <th>ProductName</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td><img width="100" src="{{ asset('uploads/' . $product->image) }}" alt=""></td>
                                <td>{{ $product->category ? $product->category->name : 'Uncategorized' }}</td>
                                <td>{{ $product->user->name }}</td>
                                <td>
                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <form class="d-inline" action="{{ route('admin.products.destroy', $product->id) }}"
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

                {{ $products->links() }}

            </div>
        </div>





    </div>
    <!-- /.container-fluid -->
@stop
