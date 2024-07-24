@extends('admin.layouts.theme')


@section('content')

<h1>
    welcom to dashboard:{{ Auth::guard('admin')->user()->name }}

</h1>





@endsection
