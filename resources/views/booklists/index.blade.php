@extends('layouts.app')

@section('content')

    <!-- Bootstrapの定形コード… -->

    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')

        <!-- 新タスクフォーム -->
        <form action="/booklist" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- タスク名 -->
            <div class="form-group">
                <label for="booklist-title" class="col-sm-3 control-label">Booklist</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="booklist-title" class="form-control">
                </div>
            </div>

            <!-- タスク追加ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- 現在のタスク -->
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
                                <div>{{ $list->id. ' '. $list->title }}</div>
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
    @endif

@endsection
