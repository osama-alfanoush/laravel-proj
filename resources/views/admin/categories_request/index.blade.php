@extends('admin.layouts.theme')


@section('content')

<h1>Category Requests</h1>

<table class="table table-striped">
    <thead>
        <tr>

            <th>Shop Name</th>
            <th>Category Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categoryRequests as $categoryRequest)
            <tr>



                <td>{{ $categoryRequest->seller->shop_name }}</td>
                <td>{{ $categoryRequest->name }}</td>
                <td>{{ $categoryRequest->status }}</td>
                <td>
                    <a href="{{ route('admin.category_requests.approve', $categoryRequest->id) }}" class="btn btn-success">approved</a>
                    <a href="{{ route('admin.category_requests.cancel', $categoryRequest->id) }}" class="btn btn-danger">cancel</a>

                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
