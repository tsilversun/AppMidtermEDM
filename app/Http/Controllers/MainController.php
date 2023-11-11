<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Service\MainService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //book

    //add
    public static function addBook(Request $request){
        return MainService::addBook($request);
    }

    //get
    public static function getBook(){
        return MainService::getBook();
    }

    //update
    public static function updateBook(Request $request){
        return MainService::updateBook($request);
    }

    //delete
    public static function deleteBook(Request $request){
        return MainService::deleteBook($request);
    }
}
