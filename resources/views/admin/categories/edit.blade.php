@extends('admin.layouts.theme')


@section('title', 'Edit Category')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Category</div>
        <div class="card-body">
            <form method="POST" action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
