@extends('layout.main')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">{{ $title }}</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol Tambah Buku --}}
    <button class="read-more" data-bs-toggle="modal" data-bs-target="#addBookModal">Tambah Buku</button><br><br>

    {{-- Modal Tambah Buku --}}
    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Tambah Buku Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('bookmark.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Buku</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="page_read" class="form-label">Halaman Dibaca</label>
                            <input type="number" name="page_read" class="form-control" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Cek apakah ada bookmark --}}
    @if($bookmarks->isEmpty())
        <div id="placeholderText" class="text-center text-muted">
            <p>Anda belum membaca buku apapun! Silahkan tambah buku yang anda baca.</p>
            <br><br><br><br><br><br>
        </div>
    @else
        {{-- Daftar Bookmark dengan Grid Layout --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($bookmarks as $bookmark)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title">{{ $bookmark->title }}</h3>
                            <h5 class="card-title"><strong>Author:</strong> {{ $bookmark->author }}</h5>
                            <h5 class="card-title"><strong>Halaman Dibaca:</strong> {{ $bookmark->page_read }}</h5>

                            {{-- Tombol Edit & Hapus --}}
                            <div class="mt-3">
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBookModal{{ $bookmark->id }}">Edit</button>
                                <!-- Tombol Hapus -->
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $bookmark->id }}">Hapus</button>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Edit Buku --}}
                    <div class="modal fade" id="editBookModal{{ $bookmark->id }}" tabindex="-1" aria-labelledby="editBookModalLabel{{ $bookmark->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editBookModalLabel{{ $bookmark->id }}">Edit Bookmark</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Konfirmasi Hapus --}}
                    <div class="modal fade" id="deleteModal{{ $bookmark->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus buku "{{ $bookmark->title }}" dari daftar bookmark Anda?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('bookmark.destroy', $bookmark->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
