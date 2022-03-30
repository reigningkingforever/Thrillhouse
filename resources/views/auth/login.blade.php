@extends('layouts.auth')
@section('main')
<div class="content">
    <h3>Login</h3>
    <hr />
    <form action="{{route('login')}}" method="POST">@csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <hr />
      {{-- <button type="button" class="btn btn-link">Signup</button> --}}
      <a href="{{route('password.request')}}" type="button" class="btn btn-link">Reset Password</a>

    </form>
  </div>
@endsection