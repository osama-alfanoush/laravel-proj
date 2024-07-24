@extends('seller.layouts.theme')


@section('content')
<h1>Products</h1>


<table class="table">
  <thead>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    <tr>
      <th>Name</th>
      <th>description</th>
      <th>image</th>
      <th>Price</th>
      <th>quantity</th>
      <th>Category</th>

      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>{{ $product->name }}</td>
      <td>{{ $product->description }}</td>
      <td> <img src="{{ asset('app/localimage/'.$product->image) }}" width="100"></td>



      <td>${{ $product->price }}</td>
      <td>{{ $product->quantity }}</td>
      <td>{{ $product->category->name }}</td>

      <td>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i>
        </a>
        <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="d-inline-block">
            @csrf
            @method('DELETE')


            <button type="submit" class="btn  me-5 btn-danger"
             onclick="return confirm('Are you sure you want to delete this product?')">
             <i class="bi bi-trash-fill"></i></button>
        </form>
    </td>

    </tr>
    @endforeach
  </tbody>
</table>




@endsection
