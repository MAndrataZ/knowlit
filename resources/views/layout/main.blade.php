<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font poppins  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <title>Walgita | {{ $title }}</title>

  </head>
  <body>
    <header class="header">

        <nav class="navbar navbar-expand-lg">
          <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo walgita.png" alt="" width="50">
          </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-4">
                  <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item mx-4">
                  <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
              </ul>
            

              <div class="boxContainer mx-4">
                <table class="elementsContainer">
                  <tr>
                    <td>
                      <input type="text" placeholder="Search" class="search">
                    </td>
                    <td>
                      <a href="#" class="mx-2"><img src="img/search.png" alt="" width="18" height="18"></a>
                    </td>
                  </tr>
                </table>
              </div>

              @auth
                  <div class="dropdown-item">
                    <div class="img-box" onclick="myFunction()">
                        <img src="img/user.png" alt="">
                    </div>
              
                    <div class="dropdown-content">
                        <ul class="links">
                            <li><a class="dropdown-dashboard" href="{{route('bookfeed')}}">My Dashboard</a></li>
                            <li><a class="dropdown-profile" href="{{route('profile')}}">Profile</a></li>
                            <li><a class="dropdown-discover" href="{{route('discover')}}">Discover</a></li>
                            <div class="divider"></div>
                            <li>
                              <form action="/signout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-signout" href="#">Sign out</button>
                              </form>
                            </li>
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
                  <a href="{{route('signin')}}" class="button-primary sign-in" style="text-decoration:none">Sign in</a>
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
            <img src="img/logo walgita.png" alt="" width="50">
          </div>
          <div class="col-md-3">
            <h5>Address</h5>
            <p class="py-2">Panjang Street no. 5,<br/> 
              Kebon Jeruk<br/>
              Jakarta 11530</p>
          </div>
          <div class="col-md-3">
            <h5>Social Media</h5>
            <a class="fb-icon" href="#">
              <img src="img/icon-facebook.png" alt="" class="py-2">
            </a>
            <a class="ig-icon" href="#">
              <img src="img/icon-instagram.png" alt="" class="py-2">
            </a>
            <a class="twt-icon" href="#">
              <img src="img/icon-twitter.png" alt="" class="py-2">
            </a>
          </div>
          <div class="col-md-2">
            <h5>Contact Info</h5>
            <div class="py-2 contact">
              <a class="telephone-number" href="#">
                <img src="img/phone.png" alt="" style="float:left">
              </a>
              <p class="phone">+6285545360779</p>
              <a class="email" href="#">
                <img src="img/mail.png" alt="" style="float:left">
              </a>
              <p class="mail">info@walgita.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>
</body>

</html>