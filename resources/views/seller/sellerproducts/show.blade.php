@extends('seller.layouts.theme')

@section('content')
    <div class="container">
        <h1>{{ $seller->name }}'s Products</h1>

        <ul>
            @foreach ($seller->products as $product)
                <li>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                </li>
            @endforeach
        </ul>
        @if (isset($product))
            <div class="card">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">Quantity: {{ $product->quantity }}</p>
                    <p class="card-text">Price: {{ $product->price }}</p>
                    <a href="{{ route('cart.add', $product->id) }}" class="btn btn-success">Add to Cart</a>
                </div>
                @endif
                <div class="card-footer">
                    <form action="{{ route('products.rate', $product->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="rate">
                        <select name="rating">
                            <option value="1">1 star</option>
                            <option value="2">2 stars</option>
                            <option value="3">3 stars</option>
                            <option value="4">4 stars</option>
                            <option value="5">5 stars</option>

                        </select>

                        <button type="submit">Rate Product</button>
                    </form>

                </div>
            </div>

    </div>

@endsection
