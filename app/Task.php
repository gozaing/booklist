<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    /**
     * タスク所有ユーザの取得
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
