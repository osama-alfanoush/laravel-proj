@extends('admin.layouts.theme')


@section('content')
  <h1>Products</h1>

  <a class="btn btn-primary" href="{{ route('products.create') }}">Add Product</a>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>image</th>
        <th>Actions</th>

      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->category->name }}</td>
          <td>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100px">
        </td>
          <td>
            <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Edit</a>
        </td>
        <td>
            <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="d-inline-block">
                @csrf
                @method('DELETE')


                <button type="submit" class="btn  me-5 btn-danger">delete</button>
            </td>

        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
