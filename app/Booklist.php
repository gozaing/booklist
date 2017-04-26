<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Book;


class Booklist extends Model
{
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

    public function books()
    {
        // この書き方はどっちも同じで変わらない
        return $this->hasMany(Book::class);
    }
}
