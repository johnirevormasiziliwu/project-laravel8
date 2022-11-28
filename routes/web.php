<?php

use App\Http\Controllers\AdminControllerCategory;
use App\Http\Controllers\DasbhoardPostsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home'

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Johni Revomasi Ziliwu",
        "email" => "jrevormasi@gmail.com",
        "image" => "Johni.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// halaman untuk single page 
Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => "Post Category",
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});



//Route untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
//Route untuk login authenticate
Route::post('/login', [LoginController::class, 'authentication']);

//Route untuk logout
Route::post('/logout', [LoginController::class, 'logout']);

//Route untuk register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//Route untuk register store
Route::post('/register', [RegisterController::class, 'store']);

//Route untuk halaman Dasbhoard
Route::get('/dasbhoard', function () {
    return view('Home.index');
})->middleware('auth');

//Routen check slug
Route::get('/dashboard/posts/checkSlug', [DasbhoardPostsController::class, 'checkSlug'])->middleware('auth');

//Route untuk rosouserce dasbhoard
Route::resource('/dasbhoard/posts', DasbhoardPostsController::class)->middleware('auth');

//Route untuk Admin Category
Route::resource('/dasbhoard/categories', AdminControllerCategory::class)->except('show')->middleware('admin');


// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')

//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => "posts",
//         'posts' => $author->posts->load('category', 'author')

//     ]);
// });