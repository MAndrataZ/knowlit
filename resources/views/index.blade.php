@extends('layout.main')

@section('content')

<section id="hero" class="content">
    <div class="container-fluid py-5 banner-1">
        <div class="container h-100">
            <div class="row">
                <div class="col-12 hero-tagline">
                    <h1>Find Your Next Read</h1>
                    <a href="{{ route('signin') }}" class="button-lg-primary try-walgita" style="text-decoration:none">Try Walgita</a>
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
                    <a href="{{ route('signin') }}" class="view-all" style="text-decoration:none">View All</a>
                </div>
            </div>

            <div class="row">
                @if(empty($books))
                    <p>No books available at the moment.</p>
                @else
                    @foreach($books as $book)
                        <div class="col-2 py-3">
                            <img src="{{ $book['cover']['medium'] ?? 'default_image.png' }}" alt="" class="img-fluid">
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