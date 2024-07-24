@extends('admin.layouts.theme')

@section('content')

<h1>Edit Product</h1>

<form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">

  @csrf
  @method('PUT')

  <input
  type="text"
  class="form-control"
  id="name"
  name="name"
  value="{{ $product->name }}">

<textarea
  class="form-control"
  id="description"
  name="description">
  {{ $product->description }}
</textarea>

<input
  type="number"
  class="form-control"
  id="price"
  name="price"
  value="{{ $product->price }}">

<select class="form-control" name="category_id">
  @foreach($categories as $category)
    <option
      value="{{ $category->id }}"
      @if($category->id == $product->category_id)
        selected
      @endif
    >
      {{ $category->name }}
    </option>
  @endforeach
</select>

@if($product->image)
  <img src="{{ asset('storage/' . $product->image) }}">
@endif

<input
  type="file"
  class="form-control-file"
  id="image"
  name="image">

  <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection
