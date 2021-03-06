@extends('layouts.app')

@section('content')

    @if (count($booklists) > 1)
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
        </div>
    @else
        <div class="panel panel-default">
            <div class="panel-heading">
                1冊の場合
            </div>
        </div>
    @endif

@endsection
