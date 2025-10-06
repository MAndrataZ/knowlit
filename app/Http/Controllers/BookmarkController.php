<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
    $bookmarks = Bookmark::where('user_id', Auth::id())->get();
    return view('bookmark', compact('bookmarks'))->with('title', 'Bookmark Saya');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page_read' => 'required|integer',
        ]);

        Bookmark::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'author' => $request->author,
            'page_read' => $request->page_read,
        ]);

        return redirect()->route('bookmark')->with('success', 'Bookmark berhasil ditambahkan!');
    }

    public function edit(Bookmark $bookmark)
    {
    if ($bookmark->user_id !== Auth::id()) {
        abort(403);
    }

    return view('bookmark-edit', compact('bookmark'))->with('title', 'Edit Bookmark');
    }


    public function update(Request $request, Bookmark $bookmark)
    {
        if ($bookmark->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page_read' => 'required|integer',
        ]);

        $bookmark->update([
            'title' => $request->title,
            'author' => $request->author,
            'page_read' => $request->page_read,
        ]);

        return redirect()->route('bookmark')->with('success', 'Bookmark berhasil diperbarui!');
    }

    public function destroy(Bookmark $bookmark)
    {
        if ($bookmark->user_id !== Auth::id()) {
            abort(403);
        }

        $bookmark->delete();

        return redirect()->route('bookmark')->with('success', 'Bookmark berhasil dihapus!');
    }
}


