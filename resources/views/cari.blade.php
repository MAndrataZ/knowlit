@extends('layout.main')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Cari Buku</h1>
    <form id="searchForm" class="d-flex mb-4">
        <input type="text" id="query" class="form-control me-2" placeholder="Masukkan judul atau penulis buku" required>
        <button type="submit" class="read-more">Cari</button>
    </form>
    <div id="placeholderText" class="text-center text-muted">
        <p>Masukkan judul atau nama penulis buku untuk mencari informasi buku.</p>
        <br><br>
        <br><br>
        <br><br>
    </div>
    <div id="results"></div>
</div>

<script>
    const searchForm = document.getElementById('searchForm');
    const resultsContainer = document.getElementById('results');
    const placeholderText = document.getElementById('placeholderText');

    searchForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        placeholderText.style.display = 'none'; // Sembunyikan teks placeholder
        resultsContainer.innerHTML = '<p>Loading... <br><br><br><br><br><br><br></p>';

        const query = document.getElementById('query').value;
        try {
            const response = await fetch(`/search-books?query=${encodeURIComponent(query)}`);
            const data = await response.json();

            if (data.error) {
                resultsContainer.innerHTML = `<p class="text-danger">${data.error}</p>`;
            } else if (data.books && data.books.length > 0) {
                resultsContainer.innerHTML = data.books.map(book => `
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="${book.cover_url}" class="img-fluid rounded-start" alt="${book.title}">
                            </div>
                            <div class="col-md-10">
                                <div class="card-body">
                                    <h3 class="card-title">${book.title}</h3>
                                    <h5 class="card-title"><strong>Author:</strong> ${book.author}</h5>
                                    <h5 class="card-title"><strong>Published:</strong> ${book.publish_year}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                `).join('');
            } else {
                resultsContainer.innerHTML = '<p class="text-muted">Buku Tidak Ditemuka.<br><br><br><br><br><br><br></p>';
            }
        } catch (error) {
            resultsContainer.innerHTML = `<p class="text-danger">Error fetching data: ${error.message}</p>`;
        }
    });
</script>

@endsection
