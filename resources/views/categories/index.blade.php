@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-8">
    <div class="d-flex justify-content-between">
        <h2>All Categories</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr> 
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ ucfirst($category->name) }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-success" style="margin-right: 5px">Edit</a>    
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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