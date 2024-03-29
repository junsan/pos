@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
    <div class="d-flex justify-content-between">
        <h2>All Products</h2>
        <button class="btn btn-success">Create</button>
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
                    <td>{{ number_format($product->price, 2, '.', '');  }}</td>
                    <td>
                        <div class="d-flex">
                            <button class="btn btn-sm btn-success" style="margin-right: 10px">Edit</button>    
                            <button class="btn btn-sm btn-danger">Delete</button>
                        <div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection