@extends('layouts.app')

@section('content')

    @if (count($booklists) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                ブックリスト
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- テーブルヘッダー -->
                    <thead>
                    <th>Booklist</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- テーブルボディー -->
                    <tbody>
                    @foreach ($booklists as $list)
                        <tr>
                            <!-- リスト名 -->
                            <td class="table-text">
                                <div><a href="{{ action('BooklistController@index', $list->id) }}">{{ $list->title }}</a></div>
                            </td>

                            <td>
                                <!-- TODO: 削除ボタン -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="panel-heading">
                ブック
            </div>
            {{--@foreach ($books as $book)--}}
                {{--{{ $book }}--}}
            {{--@endforeach--}}

        </div>
    @endif

@endsection
