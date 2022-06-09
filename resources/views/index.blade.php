@extends('layout.main')

@section('content')

  <section id="hero" class="content">

  <div class="container-fluid py-5 banner-1">
    <div class="container h-100">
      <div class="row">
        <div class="col-12 hero-tagline">
          <h1>Find Your Next Read</h1>
          <a href="{{route('signin')}}" class="button-lg-primary try-walgita" style="text-decoration:none">Try Walgita</a>
          <img src="img/banner 1.png" alt="" class="position-absolute img-hero">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 popular-now">
          <h3>Popular Now</h3>
          
        </div>
        <div class="view">
            <a href="{{route('signin')}}" class="view-all" style="text-decoration:none">View All</a>
        </div>
      </div>

      <div class="row">
        <div class="col-2 py-3">
          <img src="img/the midnight library.png" alt="" class="img-fluid">
          <h5 class="title-home">The Midnight Library</h5>
          <h6 class="author-home">Matt Haig</h6>
        </div>
        <div class="col-2 py-3">
          <img src="img/it ends with us.png" alt="" class="img-fluid">
          <h5 class="title-home">It Ends With Us</h5>
          <h6 class="author-home">Colleen Hoover</h6>
        </div>
        <div class="col-2 py-3">
          <img src="img/the secret history.png" alt="" class="img-fluid">
          <h5 class="title-home">The Secret History</h5>
          <h6 class="author-home">Donna Tartt</h6>
        </div>
        <div class="col-2 py-3">
          <img src="img/these violent delights.png" alt="" class="img-fluid">
          <h5 class="title-home">These Violent Delights</h5>
          <h6 class="author-home">Chloe Gong</h6>
        </div>
        <div class="col-2 py-3">
          <img src="img/the inheritance games.png" alt="" class="img-fluid">
          <h5 class="title-home">The Inheritance Games</h5>
          <h6 class="author-home">Jennifer Lynn Barnes</h6>
        </div>
        <div class="col-2 py-3">
          <img src="img/six of crows.png" alt="" class="img-fluid">
          <h5 class="title-home">Six Of Crows</h5>
          <h6 class="author-home">Leigh Bardugo</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container h-100">
      <div class="row">
        <div class="col-12 hero-tagline-2">
          <h1>Get Your </br>Personalized</br> Recommendations</h1>
          <img src="img/banner 2.png" alt="" class="position-absolute img-hero-2">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-5 subscription">
    <div class="container">
      <div class="col">
        <div class="subscription-box">
          <h2 class="subscription-title">Subscribe To Our Newsletter</h2>
          <form action="#">
            <div class="form-box">
              <div class="elements-form-box">
                    <input type="text" name="E-mailAddress" placeholder="Enter e-mail address" class="subscription-txt">
                    <a href="#" class="submit-subscription"><img src="img/submit.png" alt="" width="35" height="35"></a>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  </section>

 @endsection