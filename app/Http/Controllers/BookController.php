<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    public function index() {
        $books = Book::all();
        return $this->sendResponse($books, 'Books retrieved successfully.');

    }

    public function detail($id) {
        $book = Book::find($id);
        return $this->sendResponse(['id'=>$id], 'Books retrieved successfully.');
    }

}
