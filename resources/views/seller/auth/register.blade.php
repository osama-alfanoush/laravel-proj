@extends('seller.layouts.app')

@section('content')

<div class="container">
    <h1>Register as a Seller</h1>
     <p>Create an account to sell your products!</p>
      <form method="POST" action="{{ route('seller.register') }}">
        @csrf

<div class="form-group">
  <label for="name">Name</label>
  <input
    type="text"
    class="form-control @error('name') is-invalid @enderror"
    id="name"
    name="name"
    value="{{ old('name') }}"
  >

  @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="email">Email</label>
  <input
    type="email"
    class="form-control @error('email') is-invalid @enderror"
    id="email"
    name="email"
    value="{{ old('email') }}"
  >

  @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="password">Password</label>
  <input
    type="password"
    class="form-control @error('password') is-invalid @enderror"
    id="password"
    name="password"
  >

  @error('password')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<button type="submit" class="btn btn-primary">Register</button>
</form> </div>
@endsection
