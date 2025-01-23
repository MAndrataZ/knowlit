<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BookController extends Controller
{
    public function index()
    {
        $client = new Client();
        try {
            // Menggunakan endpoint yang mengembalikan buku-buku terlaris
            $response = $client->get('https://openlibrary.org/subjects/bestsellers.json?limit=6');
            $data = json_decode($response->getBody(), true);
            
            // Pastikan kita mengirimkan data yang benar ke view
            return view('index', ['books' => $data['works'], 'title' => 'Home']);
        } catch (\Exception $e) {
            // Tangani error, misalnya dengan mengalihkan ke halaman error atau menampilkan pesan
            return view('index', ['books' => [], 'title' => 'Home', 'error' => 'Unable to fetch books.']);
        }
    }
}