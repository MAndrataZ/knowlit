@extends('layout.main')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Cari Buku Berdasarkan Genre</h1>
    <form id="genreForm" class="d-flex mb-4">
        <select id="genre" class="form-select me-2" required>
            <option value="" disabled selected>Pilih Genre</option>
            <option value="love">Love</option>
            <option value="science">Science</option>
            <option value="fantasy">Fantasy</option>
            <option value="history">History</option>
            <option value="technology">Technology</option>
        </select>
        <button type="submit" class="read-more">Cari</button>
    </form>
    <div id="placeholderText" class="text-center text-muted">
        <p>Silakan pilih genre untuk mencari daftar buku terkait.</p>
        <br><br>
        <br><br>
        <br><br>
    </div>
    <div id="results"></div>
</div>

<script>
    const genreForm = document.getElementById('genreForm');
    const resultsContainer = document.getElementById('results');
    const placeholderText = document.getElementById('placeholderText');

    genreForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        placeholderText.style.display = 'none'; // Sembunyikan teks placeholder
        resultsContainer.innerHTML = '<p>Loading... <br><br><br><br><br><br><br></p>';

        const genre = document.getElementById('genre').value;
        try {
            const response = await fetch(`/genre/search?subject=${encodeURIComponent(genre)}`);
            const data = await response.json();

            if (data.error) {
                resultsContainer.innerHTML = `<p class="text-danger">${data.error}</p>`;
            } else if (data.books && data.books.length > 0) {
                resultsContainer.innerHTML = data.books.map(book => `
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="${book.cover_url || 'https://via.placeholder.com/100x150'}" class="img-fluid rounded-start" alt="${book.title}">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h3 class="card-title">${book.title}</h3>
                                    <h5 class="card-title"><strong>Author:</strong> ${book.author}</h5>
                                    <h5 class="card-title"><strong>Edition Count:</strong> ${book.edition_count}</h5>
                                    ${book.has_fulltext ? '<p class="text-success"><strong>Full Text Available</strong></p>' : '<p class="text-muted">No Full Text Available</p>'}
                                </div>
                            </div>
                        </div>
                    </div>
                `).join('');
            } else {
                resultsContainer.innerHTML = '<p class="text-muted">Tidak ada buku yang ditemukan untuk genre ini.<br><br><br><br><br><br><br></p>';
            }
        } catch (error) {
            resultsContainer.innerHTML = `<p class="text-danger">Error fetching data: ${error.message}</p>`;
        }
    });
</script>

@endsection
