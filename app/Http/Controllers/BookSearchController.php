<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookSearchController extends Controller
{
    // Menampilkan halaman pencarian
    public function index()
    {
        return view('cari', ['title' => 'Cari Buku']);
    }

    // Mengambil data dari Open Library API berdasarkan query pencarian
    public function search(Request $request)
    {
        $query = $request->query('query');

        if (!$query) {
            return response()->json(['error' => 'Query is required'], 400);
        }

        $url = 'https://openlibrary.org/search.json?q=' . urlencode($query);

        try {
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            $books = collect($data['docs'])->map(function ($book) {
                return [
                    'key' => $book['key'] ?? null,
                    'title' => $book['title'] ?? 'No Title',
                    'author' => $book['author_name'][0] ?? 'Unknown Author',
                    'publish_year' => $book['first_publish_year'] ?? 'Unknown Year',
                    'cover_url' => isset($book['cover_i'])
                        ? 'https://covers.openlibrary.org/b/id/' . $book['cover_i'] . '-M.jpg'
                        : 'https://via.placeholder.com/100x150',
                ];
            });

            return response()->json(['books' => $books]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }

    // Mengambil detail buku dari Open Library API
    public function detail(Request $request)
    {
        $key = $request->query('key');

        if (!$key) {
            return response()->json(['error' => 'Key is required'], 400);
        }

        $url = 'https://openlibrary.org' . $key . '.json';

        try {
            $response = file_get_contents($url);
            $book = json_decode($response, true);

            if (empty($book)) {
                return response()->json(['error' => 'Book not found'], 404);
            }

            // Ambil informasi penulis
            $author = 'Unknown Author';
            if (isset($book['authors'][0]['key'])) {
                $authorUrl = 'https://openlibrary.org' . $book['authors'][0]['key'] . '.json';
                $authorData = json_decode(file_get_contents($authorUrl), true);
                $author = $authorData['name'] ?? 'Unknown Author';
            }

            // Ambil ISBN
            $isbn = 'No ISBN available.';
            if (isset($book['identifiers']['isbn_13'])) {
                $isbn = implode(', ', $book['identifiers']['isbn_13']);
            } elseif (isset($book['identifiers']['isbn_10'])) {
                $isbn = implode(', ', $book['identifiers']['isbn_10']);
            }

            // Ambil penerbit
            $publisher = 'No publisher available.';
            if (isset($book['publishers'])) {
                if (is_array($book['publishers'])) {
                    $publisher = implode(', ', $book['publishers']);
                } else {
                    $publisher = $book['publishers'];
                }
            }

            // Ambil deskripsi
            $description = 'No description available.';
            if (isset($book['description'])) {
                $description = is_array($book['description'])
                    ? ($book['description']['value'] ?? 'No description available.')
                    : $book['description'];
            }

            $detail = [
                'title' => $book['title'] ?? 'No Title',
                'author' => $author,
                'publish_year' => $book['publish_date'] ?? 'Unknown Year',
                'cover_url' => isset($book['covers'][0])
                    ? 'https://covers.openlibrary.org/b/id/' . $book['covers'][0] . '-L.jpg'
                    : 'https://via.placeholder.com/100x150',
                'description' => $description,
                'isbn' => $isbn,
                'publisher' => $publisher,
                'pages' => $book['number_of_pages'] ?? 'No page count available.',
            ];

            return response()->json(['book' => $detail]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}
