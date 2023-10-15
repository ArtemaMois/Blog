<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Articles\StoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\User\UserInfoRequest;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function createForm()
    {
        return view('pages.form');
    }

    public function formInfo(StoreRequest $request)
    {

        $request->rules();

        $pathAvatar = $request->file('avatar')->store('/avatars');
        $pathResume = $request->file('resume')->store('/other');

        $pathAvatar = "/storage/$pathAvatar";
        $pathResume= "/storage/$pathResume";

        return view('pages.info', [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'hobby' => $request->input('hobby'),
            'aboutme' => $request->input('aboutme'),
            'avatar' => $pathAvatar,
            'resume' => $pathResume
        ]);
    }

    public function uploads()
    {
        return view('pages.uploads');
    }

    public function uploadsInfo(Request $request)
    {
        $path = $request->file('image')->store('/uploads/images');

        $path = "/storage/$path";
        return view('pages.uploads_info', [
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'image' => $path
        ]);
    }

    public function updateBooksForm(Book $book){
        // $bookItem = Book::whereId($book);
        return view('pages.books_edit', ['book' => $book]);
    }
}
