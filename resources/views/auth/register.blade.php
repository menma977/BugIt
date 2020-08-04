@extends('layouts.login')

@section('content')
  <div class="card elevation-2" style="border-radius: 10%;">
    <div class="card-body login-card-body" style="border-radius: 10%;">
      <div class="login-logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('dist/img/logo.png') }}" class="login-logo img-circle float-right elevation-2" style="width: 80px;" alt="logo">
        </a>
      </div>
      <p class="login-box-msg">register now</p>
      <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                 placeholder="Enter email"
                 value="{{ old('email') }}"
                 aria-describedby="email"
                 aria-invalid="true"
                 autocomplete="new-email"
                 autofocus>
          @error('email')
          <div id="email" class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror"
                 placeholder="Enter username"
                 value="{{ old('username') }}"
                 aria-describedby="username"
                 autocomplete="new-username"
                 aria-invalid="true">
          @error('username')
          <div id="username" class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"
                 placeholder="Enter email"
                 value="{{ old('password') }}"
                 aria-describedby="password"
                 aria-invalid="true"
                 autocomplete="new-password">
          @error('password')
          <div id="password" class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password-confirm">Confrimation Password</label>
          <input type="password" name="password_confirmation" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror"
                 placeholder="Enter email"
                 value="{{ old('password_confirmation') }}"
                 aria-describedby="password-confirm"
                 aria-invalid="true"
                 autocomplete="new-password">
          @error('password_confirmation')
          <div id="password-confirm" class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                 placeholder="Enter your name"
                 value="{{ old('name') }}"
                 aria-describedby="name"
                 autocomplete="new-username"
                 aria-invalid="true">
          @error('name')
          <div id="name" class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                    placeholder="Enter your address"
                    aria-describedby="address"
                    autocomplete="new-username"
                    aria-invalid="true"
                    rows="3">{{ old('address') }}</textarea>
          @error('address')
          <div id="username" class="error invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="row">

          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-outline-primary btn-block">Register</button>
          </div>
        </div>

      </form>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
      </div>
      <p class="mb-0 text-center">
        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
      </p>
    </div>
  </div>
@endsection