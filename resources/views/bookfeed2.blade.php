@extends('layout.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

</html>


  <section id="hero" class="content">

    <div class="container-fluid py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="py-5 text-center book-feed">Book Feed</h1>

            <div class="container-fluid py-5 recommendation-1">
              <div class="container h-100">
                <div class="row">
                  <div class="col recommendation-title">
                    <h3>Recommendations For You</h3>
                    <h4>Based on your favorite category</h4>
                  </div>

                  <div class="swiper featured-slider">

                    <div class="container fluid col-md-offset-1 col-md-10 col-md-offset-1 swiper-wrapper">
                      
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/the secret history.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h5 class="title-home">The Secret History</h5>
                                <h6 class="author-home">Donna Tartt</h6>
                            </div>
                        </div>
            
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/the hunger games.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                              <h5 class="title-home">The Hunger Games</h5>
                              <h6 class="author-home">Suzanne Collins</h6>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                          <div class="image-dashboard">
                              <img src="img/the lightning thief.png" alt="" class="img-fluid">
                          </div>
                          <div class="content">
                            <h5 class="title-home">The Lightning Thief</h5>
                            <h6 class="author-home">Rick Riordan</h6>
                          </div>
                       </div>

                       <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/divergent.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">Divergent</h5>
                          <h6 class="author-home">Veronica Roth</h6>
                        </div>
                      </div>

                      <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/the fault in our stars.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">The Fault In Our Stars</h5>
                          <h6 class="author-home">John Green</h6>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                      <div class="image-dashboard">
                          <img src="img/the cruel prince.png" alt="" class="img-fluid">
                      </div>
                      <div class="content">
                        <h5 class="title-home">The Cruel Prince</h5>
                        <h6 class="author-home">Holly Black</h6>
                      </div>
                  </div>

                  <div class="swiper-slide box">
                    <div class="image-dashboard">
                        <img src="img/six of crows.png" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                      <h5 class="title-home">Six Of Crows</h5>
                      <h6 class="author-home">Leigh Bardugo</h6>
                    </div>
                </div>

                    </div>
                  </div>



                </div>
              </div>
            </div>







            <div class="container-fluid py-5 recommendation-1">
              <div class="container h-100">
                <div class="row">
                  <div class="col recommendation-title">
                    <h3>The New York Times Best Sellers</h3>
                    <h4>The NYT best selling fiction and nonfiction books (March 27, 2022)</h4>
                  </div>

                  <div class="swiper featured-slider">

                    <div class="container fluid col-md-offset-1 col-md-10 col-md-offset-1 swiper-wrapper">
                      
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/the atlas six.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h5 class="title-home">The Atlas Six</h5>
                                <h6 class="author-home">Olivie Blake</h6>
                            </div>
                        </div>
            
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/anatomy.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                              <h5 class="title-home">Anatomy</h5>
                              <h6 class="author-home">Dana Schwartz</h6>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                          <div class="image-dashboard">
                              <img src="img/the 1619 project.png" alt="" class="img-fluid">
                          </div>
                          <div class="content">
                            <h5 class="title-home">The 1619 Project</h5>
                            <h6 class="author-home">Nikole Hannah-Jones</h6>
                          </div>
                       </div>

                       <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/allow me to retort.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">Allow Me To Retort</h5>
                          <h6 class="author-home">Elie Mystal</h6>
                        </div>
                      </div>

                      <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/all about love.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">All About Love</h5>
                          <h6 class="author-home">bell hooks</h6>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                      <div class="image-dashboard">
                          <img src="img/the midnight library.png" alt="" class="img-fluid">
                      </div>
                      <div class="content">
                        <div class="row">
                          <a href="{{route('book')}}" class="title-home" style="text-decoration:none;">The Midnight Library</a>
                        </div>
                        <div class="py-2 row">
                          <h6 class="author-home">Matt Haig</h6>
                        </div>
                        
                      </div>
                  </div>

                  <div class="swiper-slide box">
                    <div class="image-dashboard">
                        <img src="img/it ends with us.png" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                      <h5 class="title-home">It Ends With Us</h5>
                      <h6 class="author-home">Colleen Hoover</h6>
                    </div>
                </div>

                    </div>
                  </div>
        


                </div>
              </div>
            </div>



            <div class="container-fluid py-5 recommendation-1">
              <div class="container h-100">
                <div class="row">
                  <div class="col recommendation-title">
                    <h3>Top 2022 Releases</h3>
                    <h4>Get excited for these new 2022 reads</h4>
                  </div>

                  <div class="swiper featured-slider">

                    <div class="container fluid col-md-offset-1 col-md-10 col-md-offset-1 swiper-wrapper">
                      
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/violeta.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                                <h5 class="title-home">Violeta [English Edition]</h5>
                                <h6 class="author-home">Isabel Allende</h6>
                            </div>
                        </div>
            
                        <div class="swiper-slide box">
                            <div class="image-dashboard">
                                <img src="img/gallant.png" alt="" class="img-fluid">
                            </div>
                            <div class="content">
                              <h5 class="title-home">Gallant</h5>
                              <h6 class="author-home">V. E. Schwab</h6>
                            </div>
                        </div>

                        <div class="swiper-slide box">
                          <div class="image-dashboard">
                              <img src="img/this time tomorrow.png" alt="" class="img-fluid">
                          </div>
                          <div class="content">
                            <h5 class="title-home">This Time Tomorrow</h5>
                            <h6 class="author-home">Emma Straub</h6>
                          </div>
                       </div>

                       <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/all my rage.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">All My Rage</h5>
                          <h6 class="author-home">Sabaa Tahir</h6>
                        </div>
                      </div>

                      <div class="swiper-slide box">
                        <div class="image-dashboard">
                            <img src="img/the hacienda.png" alt="" class="img-fluid">
                        </div>
                        <div class="content">
                          <h5 class="title-home">The Hacienda</h5>
                          <h6 class="author-home">Isabel Cañas</h6>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                      <div class="image-dashboard">
                          <img src="img/book lovers.png" alt="" class="img-fluid">
                      </div>
                      <div class="content">
                        <h5 class="title-home">Book Lovers</h5>
                        <h6 class="author-home">Emily Henry</h6>
                      </div>
                  </div>

                  <div class="swiper-slide box">
                    <div class="image-dashboard">
                        <img src="img/This Wicked Fate.png" alt="" class="img-fluid">
                    </div>
                    <div class="content">
                      <h5 class="title-home">This Wicked Fate</h5>
                      <h6 class="author-home">Kalynn Bayron</h6>
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
    </div>


  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <script src="js/script.js"></script>

  </section>


@endsection