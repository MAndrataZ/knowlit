@extends('layout.main')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ isset($book['covers'][0]) ? 'https://covers.openlibrary.org/b/id/' . $book['covers'][0] . '-L.jpg' : 'default_image.png' }}" alt="" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h2>{{ $book['title'] }}</h2>
            <h5>Penulis: {{ isset($book['authors']) ? implode(', ', array_column($book['authors'], 'name')) : 'Tidak Diketahui' }}</h5>
            <p>{{ $book['description'] ?? 'Deskripsi tidak tersedia.' }}</p>
        </div>
    </div>
</div>
@endsection
