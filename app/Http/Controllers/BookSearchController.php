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

    // Mengambil data dari Open Library API
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
}
