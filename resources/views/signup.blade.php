@extends('layout.main')

@section('content')

  <section id="hero" class="content">

  <div class="container fluid py-5 col-md-offset-4 col-md-4 col-md-offset-4 signup-form">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="signup-title">Sign up</h3>
          <form action="/signup" method="post">
            @csrf
            <div class="top-margin py-4">
                <label for="username">Username<span class="text-danger">*</span></label>
                <input type="text" name="username" id="username" class="form-control-signup @error('username') is-invalid @enderror" placeholder="Enter your username" required value="{{ old('username') }}">
                @error('username')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                @enderror
              </div>
            <div class="top-margin">
                <label for="email">E-mail Address<span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control-signup @error('email') is-invalid @enderror" placeholder="Enter your e-mail address" required value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="top-margin py-4">
                <label for="password">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" id="password" class="form-control-signup @error('password') is-invalid @enderror" placeholder="Enter your password" required>
                @error('password')
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                @enderror
              </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
              <label class="form-check-label-signup" for="flexCheckDefault">
                I agree to Terms of Use & Privacy Policy
              </label>
            </div>

            <div class="py-2 signup-submit">
              <button class="btn btn-action signup-submit-button" type="submit">Sign up</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</section>

@endsection