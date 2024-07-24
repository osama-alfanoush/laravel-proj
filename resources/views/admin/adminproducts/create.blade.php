@extends('admin.layouts.theme')



@section('content')

<h1>Create Product</h1>

<form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <input type="hidden" name="seller_id" value="{{ Auth::id() }}">

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>

  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>

  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01">
  </div>
  <div class="form-group">
    <label for="quantity">quantity:</label>
    <input type="number" class="form-control" id="quantity" name="quantity" step="0.01">
  </div>
  <select name="category_id">

    @foreach($categories as $category)

      <option value="{{ $category->id }}">
        {{ $category->name }}
      </option>

    @endforeach

  </select>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
