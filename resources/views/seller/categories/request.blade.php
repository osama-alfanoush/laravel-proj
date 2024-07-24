@extends('seller.layouts.theme')

@section('content')

<h1>Request Category</h1>
<div class="row mt-4">
    <div class="col-md-12">
<form action="{{ route('categories.request') }}" method="POST" class="mt-3">
    <div class="mb-3">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Name :</label>

        <input type="text" name="name"  class="form-control" placeholder="Enter the name of the category you want to request" >

    </div>
    <button type="submit" class="btn btn-primary mt-3">Request Category</button>
</form>
    </div>
</div>

@endsection
