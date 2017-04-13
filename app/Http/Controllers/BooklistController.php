<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Booklist;
use App\Book;

class BooklistController extends Controller
{
    public function index(Request $request, $id = null)
    {
        if ($id) {
            $booklists = Booklist::where('id', $id)->get();

            // TODO: booklist のid を利用して、books を取得したい
            $books = null;
//            $books = Book::where('booklist_id', 1)->get();
//            $books = Book->$booklists();
            $booklist = Booklist::find(2);
            $books = $booklist->book();

            var_dump($booklist);
//            var_dump($books);
            exit();

        } else {
             // get all data
            $booklists = DB::table('booklists')->get();
            $books     = null;

        }


        return view('booklists.index', [
            'booklists' => $booklists,
            'books'     => $books,
        ]);
    }

    /**
     * 新タスク作成
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);

        // タスクの作成…
    }

}
