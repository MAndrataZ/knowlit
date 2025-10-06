<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom CSS file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <title>KnowLit | {{ $title }}</title>
  </head>

  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo knowlit.png') }}" alt="" width="50">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-4">
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="{{ route('genre') }}">Genre Anda</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="{{ route('cari') }}">Cari Buku</a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
            </ul>

            @auth
              <div class="dropdown-item">
                <div class="img-box" onclick="myFunction()">
                  <img src="{{ asset('img/user.png') }}" alt="">
                </div>

                <div class="dropdown-content">
                  <ul class="links">
                    <li><a class="dropdown-dashboard" href="{{ route('bookmark') }}">My BookMark</a></li>
                    <li><a class="dropdown-profile" href="{{ route('profile') }}">Profile</a></li>
                    <div class="divider"></div>
                    <li>
                      <form action="/signout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-signout">Sign out</button>
                      </form>
                    </li>
                    <li><a class="dropdown-profile" href="{{ route('about') }}">KnowLit V1.0</a></li>
                  </ul>
                </div>
              </div>

              <script>
                function myFunction() {
                  var dropdownContent = document.querySelector('.dropdown-content');
                  dropdownContent.classList.toggle('dropdown-toggle');
                }
              </script>

            @else
              <div>
                <a href="{{ route('signin') }}" class="button-primary sign-in" style="text-decoration:none">Sign in</a>
              </div>
            @endauth

          </div>
        </div>
      </nav>
    </header>

    <section id="hero" class="content">
      @yield('content')
    </section>

    <footer class="d-flex align-items-center">
      <div class="container-fluid">
        <div class="container">
          <div class="row footer">
            <div class="col-md-4">
              <img src="{{ asset('img/logo knowlit.png') }}" alt="" width="50">
            </div>
            <div class="col-md-3">
              <h5>Sistem Buku "KnowLit" Menggunakan Open Liblary API</h5>
              <p class="py-2">Sumber API :<br/>
                https://openlibrary.org/developers/api</p>
            </div>
            <div class="col-md-3">
              <h5>Social Media</h5>
              <a class="fb-icon" href="#">
                <img src="{{ asset('img/icon-facebook.png') }}" alt="" class="py-2">
              </a>
              <a class="ig-icon" href="#">
                <img src="{{ asset('img/icon-instagram.png') }}" alt="" class="py-2">
              </a>
              <a class="twt-icon" href="#">
                <img src="{{ asset('img/icon-twitter.png') }}" alt="" class="py-2">
              </a>
            </div>
            <div class="col-md-2">
              <h5>Contact Info</h5>
              <div class="py-2 contact">
                <a class="telephone-number" href="#">
                  <img src="{{ asset('img/phone.png') }}" alt="" style="float:left">
                </a>
                <p class="phone">08xx - xxxx - xxxx</p>
                <a class="email" href="#">
                  <img src="{{ asset('img/mail.png') }}" alt="" style="float:left">
                </a>
                <p class="mail">info@knowlit.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
