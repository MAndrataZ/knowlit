<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            "title" => "Dashboard",
            "books" => Book::all(),
            "authors" => Author::all()
        ]);
    }

    public function show($slug)
    {
        return view('book', [
            "title" => "Book",
            "book" => Book::find($slug)
        ]);
    }
}
