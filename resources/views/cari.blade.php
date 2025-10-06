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

<!-- Modal -->
<div class="modal fade" id="bookDetailModal" tabindex="-1" aria-labelledby="bookDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookDetailModalLabel">Detail Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="bookDetailContent">
                <!-- Detail buku akan dimuat di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
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
                    <div class="card mb-3" onclick="showBookDetail('${book.key}')" style="cursor: pointer;">
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
                resultsContainer.innerHTML = '<p class="text-muted">Buku Tidak Ditemukan.<br><br><br><br><br><br><br></p>';
            }
        } catch (error) {
            resultsContainer.innerHTML = `<p class="text-danger">Error fetching data: ${error.message}</p>`;
        }
    });

    async function showBookDetail(key) {
        try {
            const response = await fetch(`/book-detail?key=${encodeURIComponent(key)}`);
            const data = await response.json();

            if (data.error) {
                alert(data.error);
            } else {
                const book = data.book;
                const modalContent = `
                    <div class="row">
                        <div class="col-md-4">
                            <img src="${book.cover_url}" class="img-fluid" alt="${book.title}">
                        </div>
                        <div class="col-md-8">
                            <h3>${book.title}</h3>
                            <p style="color: black;"><strong>Author:</strong> <span>${book.author}</span></p>
                            <p style="color: black;"><strong>Published Year:</strong> <span>${book.publish_year}</span></p>
                            <p style="color: black;"><strong>Description:</strong> <span>${book.description || 'No description available.'}</span></p>
                            <p style="color: black;"><strong>ISBN:</strong> <span>${book.isbn || 'No ISBN available.'}</span></p>
                            <p style="color: black;"><strong>Publisher:</strong> <span>${book.publisher || 'No publisher available.'}</span></p>
                            <p style="color: black;"><strong>Pages:</strong> <span>${book.pages || 'No page count available.'}</span></p>
                        </div>
                    </div>
                `;
                document.getElementById('bookDetailContent').innerHTML = modalContent;
                const modal = new bootstrap.Modal(document.getElementById('bookDetailModal'));
                modal.show();
            }
        } catch (error) {
            alert(`Error fetching book details: ${error.message}`);
        }
    }
</script>

@endsection