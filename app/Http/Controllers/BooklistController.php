<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\Booklist;

class BooklistController extends Controller
{
    public function index(Request $request, $id = null)
    {
        if ($id) {
//            $booklists = Booklist::where('id', $id)->get();

            // TODO: booklist のid を利用して、books を取得したい
            $books = null;
//            $books = Book::where('booklist_id', 1)->get();
//            $books = Book->$booklists();

//            $booklist = Booklist::find(1)->book();
//            $booklist = Booklist::find(2);

            $booklists = Booklist::all();
//            $booklists = Booklist::where('id', 1)->get();

            foreach ($booklists as $booklist) {
//                var_dump($booklist->title);
                var_dump($booklist->id);
                $books = $booklist->book();
//                $books = $booklist->user();
                var_dump($books);
//                exit;
                foreach ($books as $book) {
                    var_dump($book->id);
                }
//                exit;
            }
//            $books = $booklist->book();

//            var_dump($booklist);
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
