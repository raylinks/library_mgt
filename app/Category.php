<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    public $fillable =['category','status'];
    protected $table = 'categories';


    public function books()
    {
        return $this->hasMany(\App\Book::class);
    }
}
