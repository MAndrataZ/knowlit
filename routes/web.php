<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookSearchController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', ["title" => "Home"]);
})->name('index');

Route::get('/', [BookController::class, 'index'])->name('index');


Route::get('/about', function () {
    return view('about', ["title" => "About"]);
}) ->name('about');


// Route untuk menampilkan halaman pencarian
Route::get('/cari', [BookSearchController::class, 'index'])->name('cari');
Route::get('/book-detail', [BookSearchController::class, 'detail']);

// Route untuk mengambil data buku dari API
Route::get('/search-books', [BookSearchController::class, 'search']);



Route::get('/genre', [GenreController::class, 'index'])->name('genre');
Route::get('/genre/search', [GenreController::class, 'search'])->name('genre.search');


Route::middleware(['auth'])->group(function () {
    Route::get('/bookmark', [BookmarkController::class, 'index'])->name('bookmark');
    Route::post('/bookmark/store', [BookmarkController::class, 'store'])->name('bookmark.store');
    Route::get('/bookmark/{bookmark}/edit', [BookmarkController::class, 'edit'])->name('bookmark.edit');
    Route::patch('/bookmark/{bookmark}', [BookmarkController::class, 'update'])->name('bookmark.update');
    Route::delete('/bookmark/{bookmark}', [BookmarkController::class, 'destroy'])->name('bookmark.destroy');
});


Route::get('/blog', function () {
    return view('blog', ["title" => "Blog"]);
}) ->name('blog');

Route::get('/discover', function () {
    return view('discover', ["title" => "Discover"]);
}) ->middleware('auth') ->name('discover');

Route::get('/signin', [SigninController::class, 'index']) ->middleware('guest') ->name('signin');

Route::post('/signin', [SigninController::class, 'authenticate']) ->name('signin');

Route::get('/signup', [SignupController::class, 'index']) ->middleware('guest') ->name('signup');

Route::post('/signup', [SignupController::class, 'store']);

Route::post('/signout', [SigninController::class, 'signout']);

Route::get('/bookfeed2', function() {
    return view('bookfeed2', ["title" => "Book Feed"]);
 }) ->middleware('auth') -> name('bookfeed2');

 Route::get('/bookfeed', function() {
    return view('bookfeed', ["title" => "Book Feed"]);
 }) ->middleware('auth') -> name('bookfeed');

 Route::get('/book', function() {
    return view('book', ["title" => "Book"]);
 }) ->middleware('auth') -> name('book');

//Route::get('/dashboard', [DashboardController::class, 'index']) ->middleware('auth') -> name('dashboard');

//Route::get('/dashboard/{book:slug}', [DashboardController::class, 'show']);

//Route::get('/categories/{category:slug}', function(Category $category) {
//    return view('category', [
//        'title' => $category->name,
 //       'books' => $category->books,
//        'category' => $category->name
 //   ]);
//});



Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
Route::patch('/profile/update', [ProfileController::class, 'update'])->middleware('auth')->name('profile.update');
Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->middleware('auth')->name('profile.update_password');
