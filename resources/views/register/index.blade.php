@extends('layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <main class="form-registrasion">
      <h1 class="h3 mb-3 fw-normal text-center mb-3">Registrasion Account</h1>
      <form action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-bottom @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Name">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}" placeholder="Username">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-4">All Ready Register? <a href="/login" class="text-decoration-none font-weight-bold">Login</a></small>
    </main>
  </div>
</div>

@endsection