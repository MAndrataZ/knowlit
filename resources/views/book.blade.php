@extends('layout.main')

@section('content')

  <section id="hero" class="content">

    <div class="container-fluid py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
                <div class="book-details">
                    <div class="row">
                      <div class="col-3">
                        <img src="img/the midnight library.png" alt="" class="book-cover">
                      </div>
                      <div class="col-5 offset-1">
                        <h1>The Midnight Library</h1>
                        <h2>Matt Haig</h2>
                      </div>
                      


                    <div class="row">
                      <h3 class="py-5">Details</h3>
                      <div class="col-2">
                        <div class="details">
                            <h4>Pages</h4>
                            <h4>Publisher</h4>
                            <h4>Published Date</h4>
                            <h4>ISBN</h4>
                            <h4>Rating</h4>
                            <h4>Category</h4>
                        </div>
                      </div>
                      <div class="col-3">
                        <h4>304</h4>
                        <h4>Penguin</h4>
                        <h4>2020-09-29</h4>
                        <h4>0525559485 9780525559481</span></h4>
                        <h4>4.06</h4>
                        <h4>Fiction</h4>
                      </div>
                    </div>
                    <div class="container description-book">
                      <div class="row">
                          <h3 class="py-5 description-title">Description</h3>
                          <p>Between life and death there is a library, and within that library, the shelves go on forever. Every book provides a chance to try another life you could have lived. To see how things would be if you had made other choices . . . Would you have done anything different, if you had the chance to undo your regrets?

                          </br></br>A dazzling novel about all the choices that go into a life well lived, from the internationally bestselling author of Reasons to Stay Alive and How To Stop Time.
                          
                          </br></br>Somewhere out beyond the edge of the universe there is a library that contains an infinite number of books, each one the story of another reality. One tells the story of your life as it is, along with another book for the other life you could have lived if you had made a different choice at any point in your life. While we all wonder how our lives might have been, what if you had the chance to go to the library and see for yourself? Would any of these other lives truly be better?
                          
                          </br></br>In The Midnight Library, Matt Haig’s enchanting new novel, Nora Seed finds herself faced with this decision. Faced with the possibility of changing her life for a new one, following a different career, undoing old breakups, realizing her dreams of becoming a glaciologist; she must search within herself as she travels through the Midnight Library to decide what is truly fulfilling in life, and what makes it worth living in the first place.</p>
                        
                      </div>
                    </div>
                </div>
                <div class="py-4 other-site-links">
                    <a class="goodreads" href="#">
                        <img src="img/goodreads.png" alt="" style="width:50px;">
                    </a>
                    <a class="px-4 amazon" href="#">
                        <img src="img/amazon.png" alt="" style="width:50px;">
                    </a>
                </div>
            </div>

            <div class="container-fluid py-5 recommendation-1" style="margin-bottom: 70px;">
              <div class="container h-100">
                <div class="row">
                  <div class="col recommendation-title">
                    <h3>Books Similar To This</h3>
                  </div>
        
                  <div class="swiper featured-slider">
        
                    <div class="container fluid col-md-offset-1 col-md-10 col-md-offset-1 swiper-wrapper">
                      
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/reasons to stay alive.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h5 class="title-home">Reasons To Stay Alive</h5>
                                <h6 class="author-home">Matt Haig</h6>
                            </div>
                        </div>
            
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/how to stop time.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                              <h5 class="title-home">How To Stop Time</h5>
                              <h6 class="author-home">Matt Haig</h6>
                            </div>
                        </div>
        
                        <div class="swiper-slide box">
                          <div class="image-dashboard">
                              <img src="img/the comfort book.png" alt="" class="img-fluid">
                          </div>
                          <div class="content">
                            <h5 class="title-home">The Comfort Book</h5>
                            <h6 class="author-home">Matt Haig</h6>
                          </div>
                       </div>
        
                       <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/normal people.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">Normal People</h5>
                          <h6 class="author-home">Sally Rooney</h6>
                        </div>
                      </div>
        
                      <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/anxious people.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">Anxious People</h5>
                          <h6 class="author-home">Sally Rooney</h6>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                      <div class="image-dashboard">
                          <img src="img/the radleys.png" alt="" class="img-fluid">
                      </div>
                      <div class="content">
                        <h5 class="title-home">The Radleys</h5>
                        <h6 class="author-home">Matt Haig</h6>
                      </div>
                  </div>
        
                  <div class="swiper-slide box">
                    <div class="image-dashboard">
                        <img src="img/the humans.png" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                      <h5 class="title-home">The Humanss</h5>
                      <h6 class="author-home">Matt Haig</h6>
                    </div>
                </div>
        
                    </div>
                  </div>
        
        
        
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>


    


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

  </section>

@endsection