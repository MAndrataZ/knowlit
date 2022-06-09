@extends('layout.main')


@section('content')

  <section id="hero" class="content">

    <div class="container-fluid py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="dashboard-title">Welcome, {{ auth()->user()->username }}!</h2>
            <h1 class="py-5 text-center book-feed">Book Feed</h1>
            <div class="pick-order">
              <h4 class="text-center">Tell us what you're interested in</h4>
              <h5 class="text-center">Pick 3 category or more to get recommendations</h5>
            </div>
              <div class="py-3 row">
                <div class="col-2">
                  <button class="button-book-feed">Fantasy</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Mystery</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Romance</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Fiction</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Thriller</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Science Fiction</button>
                </div>
              </div>

              <div class="py-3 row">
                <div class="col-2">
                  <button class="button-book-feed">Non Fiction</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Paranormal</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Poetry</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">History</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Historical Fiction</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Self Help</button>
                </div>
              </div>

              <div class="py-3 row">
                <div class="col-2">
                  <button class="button-book-feed">Children</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Young Adult</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">New Adult</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Adult</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Graphic Novels</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Psychology</button>
                </div>
              </div>

              <div class="py-3 row">
                <div class="col-2">
                  <button class="button-book-feed">Art</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Business</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Travel</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Horror</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Crime</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Comics</button>
                </div>
              </div>

              <div class="py-3 row">
                <div class="col-2">
                  <button class="button-book-feed">Classics</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Memoir</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Biography</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Science</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Philosophy</button>
                </div>
                <div class="col-2">
                  <button class="button-book-feed">Contemporary</button>
                </div>
              </div>

  
            
          </div>

      
        </div>

        <div class="py-5 row">
          <a href="{{route('bookfeed2')}}" class="button-lg-primary next-button" style="text-decoration:none">Next</a>
        </div>

      </div>
    </div>


    <style>
      .pick-order {
        height: 120px;
        background-color: #AD8B73;
        border-radius: 10px;
        padding-top: 15px;
        padding-bottom: 15px; 
        margin-bottom: 50px;
      }

      .pick-order h4 {
        font-weight: 400;
        font-size: 26px;
        line-height: 45px;
        color: #FFFFFF;
      }

      .pick-order h5 {
        font-weight: 300;
        font-size: 22px;
        line-height: 36px;
        color: #FFFFFF;
      }

      .button-book-feed {
        width: 160px;
        height: 56px;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        color: #000000;
        border: 1px solid #000000;
        border-radius: 10px;
        background: none;
      }
      
      .button-book-feed:active, .book-feed-active {
        background-color:#AD8B73;
        color: white;
      }

      .next-button {
        background-color: #AD8B73;
        width: 160px;
        height: 57px;
        padding-top: 15px;
        padding-bottom: 15px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #FFFFFF;
        text-align: center;
        border-radius: 6px;
        margin: 0 auto;
      }

      .next-button:hover, .next-button:hover {
          background-color: #7D5A50;
          color: #fff;
      }

    </style>


    <script>
      $(".button-book-feed").click(function(e) {
        $(".button-book-feed"); 
        $(this).toggleClass("book-feed-active");
        e.preventDefault();
      });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="js/script.js"></script>

  </section>

@endsection