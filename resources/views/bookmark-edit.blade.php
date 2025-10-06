@extends('layout.main')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">{{ $title }}</h1>

    <form action="{{ route('bookmark.update', $bookmark->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" name="title" class="form-control" value="{{ $bookmark->title }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" class="form-control" value="{{ $bookmark->author }}" required>
        </div>
        <div class="mb-3">
            <label for="page_read" class="form-label">Halaman Dibaca</label>
            <input type="number" name="page_read" class="form-control" value="{{ $bookmark->page_read }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('bookmark') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
