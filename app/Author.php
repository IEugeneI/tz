<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'authors';
    protected $hidden = ['pivot'];

    public function books()
    {
        return $this->belongsToMany(Book::class,'author_book');
    }
}
