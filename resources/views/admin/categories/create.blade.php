@extends('admin.layouts.theme')


@section('title', 'Add Category')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Add Category</h1>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
