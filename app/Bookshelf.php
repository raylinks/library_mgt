<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    public $fillable =['bookshelf','status'];
    protected $table = 'bookshelves';

    public function books()
    {
        return $this->hasMany(\App\Book::class);
    }

}
