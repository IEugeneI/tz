<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['name', 'page_count'];


    protected $hidden = ['pivot'];

    public function authors()
    {
        return $this->belongsToMany(Author::class,'author_book');
    }
}
