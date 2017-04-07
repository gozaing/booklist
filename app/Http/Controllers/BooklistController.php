<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Booklist;

class BooklistController extends Controller
{
    public function index(Request $request)
    {
        // get all data
        $booklists = DB::table('booklists')->get();

        return view('booklists.index', [
            'booklists' => $booklists
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
