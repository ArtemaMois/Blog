<?php

use App\Http\Controllers\Blog\CommentsController;
use App\Http\Controllers\Blog\PostsController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Web\ProductsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\Applications\PageController;
use App\Http\Controllers\Applications\ArticlesController;
use App\Http\Controllers\Blog\PagesController as BlogPagesController;
use App\Http\Controllers\Web\BooksController;
use App\Http\Controllers\Web\InfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/test', function () {
//     return view('pages.test');
// });

// Route::get('/admin', function () {
//     return view('templates.admin');
// });

// Route::controller(PagesController::class)->group(function () {
//     Route::get('/home', 'home')->name('home');
//     Route::get('/about', 'about')->name('about');
//     Route::get('/form', 'createForm')->name('form');
//     Route::post('/form/info', 'formInfo')->name('info');
//     Route::get('/uploads', 'uploads')->name('uploads');
//     Route::post('/uploads/info', 'uploadsInfo')->name('uploads.info');
//     Route::get('/book/{book}/edit', 'updateBooksForm')->name('books.edit');
// });


// Route::controller(PageController::class)->group(function () {
//     Route::get('/home', 'home')->name('home');
//     Route::get('/articles', 'articles')->name('articles');
//     Route::get('/articles/create', 'createArticleForm')->name('article.page.create');
//     Route::get('/articles/{article}', 'showArticle')->name('article');
//     Route::get('/article/{article}/edit', 'updateArticleForm')->name('articles.page.edit');
// });

// Route::controller(ArticlesController::class)->group(function () {
//     Route::post('/articles/create', 'create')->name('articles.create');
//     Route::post('/articles/{article}/update', 'update')->name('articles.update');
//     Route::post('/articles/{article}/delete', 'delete')->name('articles.delete');
// });

// Route::get('/app', function () {
//     return view('layouts.app');
// });

// Route::controller(BooksController::class)->group(function () {
//     Route::get('/books', 'books')->name('books');
//     Route::get('books/{book}', 'showBook')->name('book');
//     Route::get('/books/add', 'createBookForm')->name('books.pages.add');
//     Route::post('/book/add', 'create')->name('books.add');
//     Route::post('/books/{book}/update', 'update')->name('books.update');
//     Route::post('/books/{book}/delete', 'delete')->name('books.delete');
// });


// Route::controller(ProductsController::class)->group(function () {
//     Route::get('/products', 'products')->name('products');
// });


Route::controller(BlogPagesController::class)->group(function () {
    Route::get('posts', 'showPosts')->name('posts');
    Route::get('posts/add', 'createPostsForm')->name('posts.page.create');
    Route::get('posts/{post}', 'showPost')->name('post');
    Route::get('posts/{post}/update', 'updatePostsForm')->name('posts.page.update');
});

Route::controller(PostsController::class)->group(function () {
    Route::post('posts/add', 'create')->name('posts.create');
    Route::post('/posts/{post}/update', 'update')->name('posts.update');
    Route::post('/posts/{post}/delete', 'delete')->name('posts.delete');
});

Route::controller(CommentsController::class)->group(function () {
    Route::post('posts/{post}/comment/create', 'create')->name('comments.create');
    Route::post('posts/{post}/comments/{comment}/delete', 'delete')->name('comment.delete');
});





