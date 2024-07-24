@extends('admin.layouts.theme')

@section('content')

<h1>Pending Orders</h1>

<table class="table table-striped">
    <thead>
        <tr>

            <th>Order ID</th>
            <th>Customer Name</th>
            <th>products</th>
            <th>products price</th>
            <td>quantity </td>

            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orderRequests as $orderRequest)
        @foreach ($orderItems as $orderItem)


            <tr>

                <td>{{ $orderRequest->order_id }}</td>
                <td>{{ $orderRequest->user_id }}</td>
                <td>{{ $orderRequest->product->name }}</td>
                <td>{{ $orderRequest->product->price }}</td>

                <td>{{ $orderItem->quantity }}</td>
                <td>{{ $orderRequest->order->status }}</td>
                <td>
                    <form method="POST" action="{{ route('orders.approve', $orderRequest->order_id) }}" class="d-inline-block">
                        @csrf



                        <button type="submit " class="btn  me-5 btn-info"
                         onclick="return confirm('Are you sure you want to delete this product?')">
                         <i class="bi bi-check-circle-fill"></i></button>
                    </form>
                    <form method="POST" action="{{ route('orders.cancel', $orderRequest->order_id) }}" class="d-inline-block">
                        @csrf



                        <button type="submit" class="btn  me-5 btn-danger"
                         onclick="return confirm('Are you sure you want to delete this product?')">
                         <i class="bi bi-x-circle-fill"></i>
                        </button>
                    </form>
                </td>


            </tr>
            @endforeach   @endforeach
    </tbody>
</table>

@endsection
