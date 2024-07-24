@extends('seller.layouts.theme')


@section('content')

<h1>Welcome Back, {{ auth()->user()->name }}</h1>

@if($seller = App\Models\Seller::where('user_id', auth()->id())->first())
    @if ($seller)
        <h3>Here are some quick stats from your store: {{ $seller->shop_name }}</h3>
    @else
        <h3>You do not have a store yet.</h3>
    @endif

@endif




@endsection
