@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="d-flex justify-content-between">
            <h2>Edit Product</h2>
            <a href="{{ route('products.index') }}" class="btn btn-success">Back</a>
        </div>
        @if($errors->any())
            <div class="p-3 mt-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">        
                @foreach($errors->all() as $error) 
                    <div>{{ $error }}</div>      
                @endforeach
            </div>
        @endif
        
        <form action="{{ route('products.update', $product->id) }}" class="mt-3 mb-5" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input value="{{ $product->name }}" type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description">{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category) 
                        <option {{ $product->category_id == $category->id ? 'selected' : '';  }} value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value="{{ $product->price }}" type="text" name="price" class="form-control" id="price">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection