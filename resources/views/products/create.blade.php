@extends('admin.layouts.theme')

@section('content')
<h1>Create Product</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <input type="hidden" name="seller_id" value="{{ Auth::id() }}">

  <div class="form-group mt-3">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>

  <div class="form-group mt-3">
    <label for="image " style="margin-right: 25px">Image:</label>
    <input type="file" class="" id="image" name="image" style="color: black;border-radius:15px;border:solid 2px #0aad0a;background-color:#ceefce" name="image">
  </div>

  <div class="form-group mt-3">
    <label for="price">Price:</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01">
  </div>
  <div class="form-group mt-3">
    <label for="quantity">quantity:</label>
    <input type="number" class="form-control" id="quantity" name="quantity" step="0.01">
  </div>
  <select name="category_id" id="category_id">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection
