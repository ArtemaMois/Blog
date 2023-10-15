<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Books\CreateBookRequest;
use App\Http\Requests\Books\UpdateBooksRequest;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BooksController extends Controller
{

    public function books(){
        $books = Book::all();
        return view('pages.books', ['books' => $books]);
    }

    public function showBook($book)
    {
        $bookItem = Book::whereId($book)->first();
        return view('pages.book', [
            'book' => $bookItem
        ]);
    }

    public function createBookForm()
    {
        return view('pages.books_add');
    }
    public function create(CreateBookRequest $request)
    {
        $book = new Book();

        $image_urlPath = "/storage/{$request->file('image_url')->store('/uploads')}";
        $book->name = $request->input('name');
        $book->description = $request->input('description');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->total = $request->input('total');
        $book->image_url = $image_urlPath;

        $book->save();
        // dd($book);
        return redirect()->route('books');
    }

    public function update(Book $book, UpdateBooksRequest $request)
    {

        if($request->hasFile('image_url')){
            $image_urlPath = "/storage/{$request->file('image_url')->store('/uploads')}";
        }

        $book->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'total' => $request->input('total'),
            'image_url' => $image_urlPath ?? $book->imahe_url
        ]);

        return redirect()->back();
    }

    public function delete(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('books');
    }
}
