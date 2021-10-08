@extends('admin.master')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr class="bg-dark text-white">
                <th>{{ __('dashboard.ID') }}</th>
                <th>{{ __('dashboard.ProductName') }}</th>
                <th>{{ __('dashboard.Description') }}</th>
                <th>{{ __('dashboard.Price') }}</th>
                <th>{{ __('dashboard.Quantity') }}</th>
                <th>{{ __('dashboard.Image') }}</th>
                <th>{{ __('dashboard.Category') }}</th>
                <th>{{ __('dashboard.Username') }}</th>
                <th>{{ __('dashboard.Action') }}</th>
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
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i
                                class="fas fa-edit"></i></a>
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
@stop
