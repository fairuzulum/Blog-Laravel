@extends('layouts.main')

@section('container')

<div class="row d-flex justify-content-center">
  <div class="col-md-4">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <form action="/login" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
      <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Address" autofocus required>
        <label for="email">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <small class="text-center d-block mt-3">Not registered ? <a href="/register" class="text-decoration-none">Register Now!</a></small>
  </div>
</div>
  
   
  
@endsection