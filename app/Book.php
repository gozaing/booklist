<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function booklist()
    {
        return $this->belongsTo(Booklist::class);
    }
}
