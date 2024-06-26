@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
    <div class="d-flex justify-content-between">
        <h2>All Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr> 
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ ucfirst($product->name) }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ 'Php '.number_format($product->price, 2, '.', '');  }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-success" style="margin-right: 5px">Edit</a>    
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        <div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection