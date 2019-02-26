<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issued extends Model
{
    public $fillable =['student_id', 'student','user_id','isbn','book','return_d'];
    protected $table = 'issueds';

    public function book()
    {
        return $this->belongsTo(\App\Book::class, 'book');
    }
}
