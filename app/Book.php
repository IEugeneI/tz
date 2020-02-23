<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['name', 'page_count'];

  //  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $hidden = ['pivot'];

    /*public function relation()
    {
        return $this->hasMany('App\Relation','book_id','id');
    }*/
    public function authors()
    {
        return $this->belongsToMany(Author::class,'author_book');
    }
}
