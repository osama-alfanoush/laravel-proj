@extends('admin.layouts.theme')


@section('title', 'Add Category')

@section('content')
<div class="container">
    <div class="card ">
        <div class="card-header  fs-1"style="background-color:
       #ceefce;color:#0aad0a">Categories</div>
        <div class="card-body "style="background-color:#0aad0a">
            <table class="table table-Info table-Primary text-white">
                <thead>
                    <tr>
                        <th>Name</th>

                        <th>Actions</th>



                    </tr>
                </thead>
                <tbody class="table table-striped  "style="background-color:#ceefce">
                    @foreach ($categories as $category)
                    <tr>

                        <td class="fs-2">{{ $category->name }}</td>
                        <td class="fs-2">{{ asset('app/localimage/'.$category->image) }}</td>

                        <td>


                                 <form action="{{ route('categories.destroy',$category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('categories.edit', $category->id) }}"
                                        class="btn btn-info" style="background:#0aad0a "><i class="bi bi-pencil-square"></i></a>

                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>

                                   </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <a href="{{ route('categories.create') }}" class="btn btn-light mb-3">Create Category</a>

        </div>
    </div>
</div>
@endsection
