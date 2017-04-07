@extends('layouts.app')

@section('content')

    <!-- Bootstrapの定形コード… -->
<?php foreach ($booklists as $list): ?>
    <p><?php echo $list->title; ?></p>

<?php endforeach; ?>

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

    <!-- TODO: 現在のタスク -->
@endsection
