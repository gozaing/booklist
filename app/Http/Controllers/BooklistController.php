<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\Booklist;

class BooklistController extends Controller
{
    public function index(Request $request, $id = null)
    {
        if ($id) {

            // IDで指定したBooklistのみ取得
            $booklists = Booklist::find($id);
            // 関連する本の一覧を取得
            $books     = $booklists->books;

        } else {

            // ID指定なしは、全県取得
            $booklists = Booklist::get();
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
