<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Book;


class Booklist extends Model
{
    // TODO: この複数代入するという部分が理解出来ていない
    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = ['title'];


    /**
     * Booklist 所有ユーザの取得
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(Booklist::class);
    }

    public function book()
    {
        // この書き方はどっちも同じで変わらない
        return $this->hasMany(Book::class);
//        return $this->hasMany('App\Book');
    }
}
