<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class MainService extends Controller
{
    //book

    //add
    public static function addBook(Request $request){
        $tmp = new Book();
        $tmp->title = $request->title;
        $tmp->descript = $request->descript;
        $tmp->save();
        return Book::all();
    }

    //get
    public static function getBook(){
        return Book::all();
    }

    //update
    public static function updateBook(Request $request){
        $tmp = Book::find($request->id);
        $tmp->title = $request->title;
        $tmp->descript = $request->descript;
        $tmp->save();
        return Book::all();
    }

    //delete
    public static function deleteBook(Request $request){
        $tmp = Book::find($request->id);
        $tmp->delete();
        return Book::all();
    }
}
