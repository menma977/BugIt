@extends('layouts.login')

@section('content')
  <div class="card elevation-2" style="border-radius: 20%;">
    <div class="card-body login-card-body" style="border-radius: 20%;">
      <div class="login-logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('dist/img/logo.png') }}" class="login-logo img-circle elevation-2" style="width: 150px;" alt="logo">
        </a>
      </div>
      <p class="login-box-msg">start your budgeting</p>
      <form action="{{ route('login') }}" method="post">
        @csrf

        @error('username')
        <small id="username" class="text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
          <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @enderror"
                 value="{{ old('username') }}"
                 autocomplete="username"
                 autofocus
                 placeholder="Username or Email"
                 aria-describedby="username"
                 aria-invalid="true">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        @error('password')
        <small id="password" class="text-danger">{{ $message }}</small>
        @enderror
        <div class="input-group mb-3">
          <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                 autocomplete="current-password"
                 placeholder="Masukan Katasandi"
                 aria-describedby="password"
                 aria-invalid="true">
          <div class="input-group-append">
            <div class="input-group-text">
              <div class="fas fa-lock"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-outline-primary btn-block">
              Login
            </button>
          </div>
        </div>
      </form>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
      </div>
      <p class="mb-0 text-center">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
@endsection