<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $fillable =['name','category_id','author_id','shelf_id','isbn','price','total'];
    protected $table = 'books';


    public function category()
    {
        return $this->belongsTo(\App\Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(\App\Author::class, 'author_id');
    }

    public function shelf()
    {
        return $this->belongsTo(\App\Bookshelf::class, 'shelf_id');
    }
    public function issue()
    {
        return $this->hasMany(\App\Issued::class);
    }
}
