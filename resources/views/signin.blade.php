@extends('layout.main')

@section('content')

  <section id="hero" class="content">

  <div class="container fluid py-5 col-md-offset-4 col-md-4 col-md-offset-4 signin-form">
    <div class="container">
      <div class="row">
        <div class="col">

          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('signinError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('signinError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <h2 class="signin-welcome">Welcome to Walgita!</h2>
          <h3 class="py-3 signin-title">Sign in</h3>
          <form action="{{ route('signin') }}" method="post">
            @csrf

            <div class="top-margin py-4">
                <label>E-mail Address<span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control-signin @error('email') is-invalid @enderror" placeholder="Enter your e-mail address" autofocus required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <div class="top-margin">
                <label>Password<span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control-signin" placeholder="Enter your password" required>
            </div>

            <div class="py-3 form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>

            <div class="py-3">
                  <b><a href="" style="text-decoration:none" class="forgot-password">Forgot Password?</a></b>
            </div>

            <div class="py-4 signin-submit">
              <button class="btn btn-action signin-submit-button" type="submit">Sign in</button>
            </div>

            <div class="py-2 signup-order">
              <p class="text-center text-muted register-question">Don't have an account? <a href="{{route('signup')}}" style="text-decoration:none" class="register-order">Sign up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection