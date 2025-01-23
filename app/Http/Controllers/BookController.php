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
            $response = $client->get('https://openlibrary.org/subjects/bestsellers.json?limit=6');
            $data = json_decode($response->getBody(), true);
            return view('your_view_name', ['books' => $data['works']]); // Ganti 'your_view_name' dengan nama view Anda
        } catch (\Exception $e) {
            // Tangani error, misalnya dengan mengalihkan ke halaman error atau menampilkan pesan
            return view('your_view_name', ['books' => [], 'error' => 'Unable to fetch books.']);
        }
    }
}