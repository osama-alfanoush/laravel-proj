@extends('admin.layouts.theme')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Category</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ asset('app/localimage/'.$category->image) }}</td>
                            <td>{{ $category->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
