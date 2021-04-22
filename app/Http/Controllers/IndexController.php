<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class IndexController extends Controller
{
    public function getIndex(){
        $books = Book::all();
        $bookCount = Book::where('id','>',0)->count();
        return view('index', array('books'=>$books, 'bookCount'=>$bookCount));
    }

    public function postBook(Request $request){
        $validateData = $request->validate(
            [
                'name'=>'required|string',
                'book_code'=>'required|integer',
                'author'=>'required|string',
            ]
        );
        // Kayıt İşlemleri
        $book = new Book();
        $book->name = $request->name;
        $book->book_code = $request->book_code;
        $book->author = $request->author;
        $book->save();
        return back();
    }

}
