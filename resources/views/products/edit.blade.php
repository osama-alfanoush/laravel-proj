@extends('admin.layouts.theme')



@section('content')

<h1>Edit Product</h1>

@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="product" value="{{ $product->id }}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name"value="{{ $product->name }}">
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
  </div>

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="" id="image" style="color: black;border-radius:15px;border:solid 2px #0aad0a;background-color:#ceefce" name="image">
  </div>

  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01"value="{{ $product->price }}">
  </div>
  <div class="form-group">
    <label for="quantity">quantity:</label>
    <input type="number" class="form-control" id="quantity" name="quantity" step="0.01"value="{{ $product->quantity }}">
  </div>


  <select name="category_id">
    @foreach($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection
