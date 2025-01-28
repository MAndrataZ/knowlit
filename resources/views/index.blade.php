@extends('layout.main')

@section('content')

<section id="hero" class="content">

    @if(Auth::check())
        <!-- Jika sudah login -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-white" style="background-color: #AD8B73;">
                            <h2>Selamat Datang, {{ Auth::user()->username }}!</h2>
                        </div>
                        <div class="card-body">
                            <p style="color: #000;">Dengan login Anda dapat mencoba fitur BookMark kami.</p>
                            <a href="#bookmark" class="read-more btn" style="background-color: #AD8B73; color: #fff; text-decoration: none;">Coba Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- Jika belum login -->
        <div class="container-fluid py-5 banner-1">
            <div class="container h-100">
                <div class="row">
                    <div class="col-15 hero-tagline">
                        <h1>Web Buku KnowLit</h1>
                        <a href="{{ route('signin') }}" class="button-lg-primary try-walgita" style="text-decoration:none">Coba KnowLit</a>
                        <img src="img/banner 1.png" alt="" class="position-absolute img-hero">
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 popular-now">
                    <h3>Best Seller</h3>
                </div>
                <div class="view">
                    <a href="{{ route('signin') }}" class="view-all" style="text-decoration:none">Lihat Semua</a>
                </div>
            </div>

            <div class="row">
              @if(empty($books))
                  <p>Sepertinya tidak ada buku yang tersedia saat ini.</p>
              @else
                  @foreach($books as $book)
                      <div class="col-2 py-3">
                          <img src="{{ isset($book['cover_id']) ? 'https://covers.openlibrary.org/b/id/' . $book['cover_id'] . '-M.jpg' : 'default_image.png' }}" alt="" class="img-fluid">
                          <h5 class="title-home">{{ $book['title'] }}</h5>
                          <h6 class="author-home">{{ implode(', ', array_column($book['authors'], 'name')) }}</h6>
                      </div>
                  @endforeach
              @endif
          </div>
        </div>
    </div>
</section>

@endsection
