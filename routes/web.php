<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
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
}) ->name('index');

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
}) ->name('about');

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



Route::get('/profile', function () {
    return view('profile', ["title" => "Form Profile"]);
}) ->middleware('auth') ->name('profile');

