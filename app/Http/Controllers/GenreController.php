<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Menampilkan halaman genre
    public function index()
    {
        return view('genre', [
            'title' => 'Genre',
        ]);
    }

    // Mengambil data buku berdasarkan genre dari Open Library API
    public function search(Request $request)
    {
        $subject = $request->query('subject'); // Ambil parameter genre
        if (!$subject) {
            return response()->json(['error' => 'Subject parameter is required'], 400);
        }

        $apiUrl = "https://openlibrary.org/subjects/" . urlencode($subject) . ".json";

        try {
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);

            // Ambil data buku yang relevan
            $books = [];
            if (isset($data['works']) && count($data['works']) > 0) {
                foreach ($data['works'] as $work) {
                    $books[] = [
                        'title' => $work['title'] ?? 'Unknown Title',
                        'author' => isset($work['authors'][0]['name']) ? $work['authors'][0]['name'] : 'Unknown Author',
                        'edition_count' => $work['edition_count'] ?? 'Unknown Count',
                        'has_fulltext' => $work['has_fulltext'] ?? false,
                        'cover_id' => $work['cover_id'] ?? null,
                        'cover_url' => isset($work['cover_id'])
                            ? "https://covers.openlibrary.org/b/id/" . $work['cover_id'] . "-L.jpg"
                            : null,
                    ];
                }
            }

            return response()->json([
                'status' => 'success',
                'subject' => $subject,
                'total_books' => $data['work_count'] ?? 0,
                'books' => $books,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data from Open Library API'], 500);
        }
    }
}
