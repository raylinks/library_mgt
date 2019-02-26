<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $fillable =['author'];
    protected $table = 'authors';


    public function books()
    {
        return $this->hasMany(\App\Book::class);
    }


}
