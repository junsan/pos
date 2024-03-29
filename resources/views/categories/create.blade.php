@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="d-flex justify-content-between">
            <h2>Create Categories</h2>
            <a href="{{ route('categories.index') }}" class="btn btn-success">Back</a>
        </div>
        @if($errors->any())
            <div class="p-3 mt-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">        
                @foreach($errors->all() as $error) 
                    <div>{{ $error }}</div>      
                @endforeach
            </div>
        @endif
        
        <form action="{{ route('categories.store') }}" class="mt-3 mb-5" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection